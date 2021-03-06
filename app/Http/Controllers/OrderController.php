<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatus;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class OrderController extends Controller
{
    /**
     * OrderController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Application|Factory|View
     */
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

    /**
     * @return Application|Factory|View
     */
    public function manageOrder()
    {
        $orders = Order::where('status', 'Pending')->latest()->get();

        return view('shop.manageOrders', compact('orders'));
    }

    /**
     * @param Order $order
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function orderUpdate( Order $order, Request $request) {
        $customer = User::find($order->id_client);
        $order->status=$request->status;
        $order->save();
        Mail::to($request->user())->send(new OrderStatus($order, $customer));

        return redirect(route('shop.manage'));
    }

    /**
     * @param Order $order
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Order $order) {
        $order->delete();

        return redirect('orders');
    }

    /**
     * @return Application|Factory|View
     */
    public function placeOrder() {

        return view('shop.placeOrder');
    }

    /**
     * @param Request $request
     * @param Order $order
     * @return Application|Factory|View
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

        return view('shop.checkout', compact('order', 'cart'));
    }

    /**
     * @return Application|Factory|View
     */
    public function orderHistory() {
        $orders = Order::where('id_client', '=', Auth::user()->id)->latest()->get();

        return view('shop.orderHistory', compact('orders'));
    }

    /**
     * @return Application|Factory|View
     */
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
     * @return Application|Factory|View
     */
    public function showOrder(Order $order)
    {
        $products = Product::findMany(array_keys(json_decode($order->items, true)));

        return view('shop.orders', compact('products', 'order'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
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
