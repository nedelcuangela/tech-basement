<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;


/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Application|Factory|View
     */
    public function getCart()
    {
        $oldcart = Session::has('shop') ? Session::get('shop') : null;
        $cart = new Cart($oldcart);

        return view('shop.shopping-cart', compact('cart'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('shop') ? Session::get('shop') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('shop', $cart);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function getReduceByOne($id)
    {
        $oldCart = Session::has('shop') ? Session::get('shop') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('shop', $cart);

        return redirect()->route('shop.shopping-cart');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function removeItem($id)
    {
        $oldCart = Session::has('shop') ? Session::get('shop') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('shop', $cart);

        return redirect()->route('shop.shopping-cart');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::all();

        if (request()->sort == 'low_high') {
            $products = $products->sortBy('price');
        }
        elseif(\request()->sort == 'high_low'){
            $products = $products->sortByDesc('price');
        }

        if (request()->sort == 'alphabetically_asc'){
            $products = $products->sortBy('name');
        } elseif (\request()->sort == 'alphabetically_desc'){
            $products = $products->sortByDesc('name');
        }

        return view('products.index', compact('products' ));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $products = new Product();

        return view('products.create', compact('products'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $product = Product::create($this->validateRequest());
        $this->storeImage($product);

        return redirect('products');
    }

    /**
     * @param $product
     */
    public function storeImage($product)
    {
        if (request()->hasFile('image')) {
            $product->update([
                'image' => request()->file('image')->store('uploads', 'public'),
            ]);
        }
    }

    /**
     * @param Product $product
     * @return Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * @param Product $product
     * @return Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * @param Product $product
     * @return RedirectResponse|Redirector
     */
    public function update(Product $product)
    {
        $this->storeImage($product);
        $product->update($this->validateRequest());

        return redirect('products/');
    }

    /**
     * @param Product $product
     * @return RedirectResponse|Redirector
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('products');
    }

    /**
     * @return array
     */
    private function validateRequest()
    {
        return tap($validatedData = request()->validate([

            'name' => ['required', 'min:3', 'max:100', 'unique:products,name'],
            'brand' => ['required', 'min:3', 'max:100',],
            'specifications' => ['required'],
            'category' => ['required', 'min:3', 'max:100'],
            'price' => ['required'],
            'description' => ['required'],
            'stock' => ['required'],
        ]), function () {

            if (request()->hasFile('image')) {

                request()->validate([

                    'image' => 'file|image|max:5000',
                ]);
            }
        });
    }
}
