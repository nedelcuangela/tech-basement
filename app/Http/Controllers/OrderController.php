<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatus;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;
use Illuminate\View\View;
use function Sodium\compare;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chart()
    {

        $orders = Order::select(DB::raw('DATE(created_at) as date, SUM(total) as d_total'))->groupBy('date')->get();
        $labels = []; $data = [];

        foreach ($orders as $order) {
            $labels[] = $order->date;
            $data[] = $order->d_total;
        }

        return view('shop.statistics', compact('labels', 'data'));
    }

    public function manageOrder()
    {
        $orders = Order::where('status', 'Pending')->latest()->get();

        return view('shop.manageOrders', compact('orders'));
    }

    public function orderUpdate( Order $order, Request $request) {
        $customer = User::find($order->id_client);
        $order->status=$request->status;
        $order->save();
        Mail::to($request->user())->send(new OrderStatus($order, $customer));
        return redirect(route('shop.manage'));
    }

    public function destroy(Order $order) {

        $order->delete();

        return redirect('orders');
    }

    public function placeOrder() {

        return view('shop.placeOrder', compact('shop', 'products'));
    }

    /**
     * @param Request $request
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function checkout(Request $request, Order $order)
    {
        $cart = session('shop');
        $items = [];
        foreach ($cart->products as $product) {
            $items[$product['product']->id] = $product['qty'];
        }
        $order = new Order();
        $order->id_client = Auth::user()->id;
        $order->items = json_encode($items);
        $order->total = $cart->totalPrice;
        $order->adress = $request->input('adress');
        $order->phone = $request->input('phone');
        $order->zipcode = $request->input('zipcode');
        $order->status = 'Pending';
        $order->save();

        session([

            'shop' => new Cart(null),
        ]);

        return view('shop.checkout', compact('products', 'shop'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function orderHistory() {

        $orders = Order::where('id_client', '=', Auth::user()->id)->latest()->get();

        return view('shop.orderHistory', compact('orders'));
    }

    public function index() {

        $orders = Order::all();

        if (request()->sort == 'earliest_latest') {
            $orders = $orders->sortBy('created_at');
        }
        elseif(\request()->sort == 'latest_earliest'){
            $orders = $orders->sortByDesc('created_at');
        }

        return view('shop.index', compact('orders'));
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function showOrder(Order $order)
    {
        $products = Product::findMany(array_keys(json_decode($order->items, true)));

        return view('shop.orders', compact('products', 'order'));
    }

    private function validateRequest() {

        return request()->validate([
            'adress' => ['required', 'min:3', 'max:200'],
            'phone' => ['required', 'min:10', 'max:10'],
            'zipcode' => ['required', 'min:2', 'max:10'],
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->except('_token'), [
                'adress' => ['required', 'min:3', 'max:200'],
                'phone' => ['required', 'min:10', 'max:10'],
                'zipcode' => ['required', 'min:2', 'max:10'],
            ]);

            if ($validator->fails()) {

                return redirect()->back()->with(['error' => 'Validation failed'])->withErrors($validator->errors())->withInput($request->all());
            }

            $order = new Order();
            $order->adress = $request->get('adress');
            $order->phone = $request->get('phone');
            $order->phone = $request->get('zipcode');


            if ($order->save()) {

                return redirect()->back()->with(['success' => 'Order created!']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Order not Created!']);
        }
    }
}
