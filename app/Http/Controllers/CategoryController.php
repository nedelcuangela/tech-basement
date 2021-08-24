<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatus;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\HigherOrderTapProxy;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;
use Illuminate\View\View;
use function Sodium\compare;

class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * @return RedirectResponse
     */
    public function store()
    {
        $category = Category::create($this->validateRequest());

        return redirect()->route('categories');
    }

    /**
     * @return HigherOrderTapProxy|mixed
     */
    private function validateRequest()
    {
        return tap($validatedData = request()->validate([
            'slug' => ['required', 'min:3', 'max:100'],
            'name' => ['required', 'min:3', 'max:100'],
        ]));
    }

    /**
     * @param Category $category
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function show(Category $category)
    {
        $category = DB::table('categories')->where('category', $this->category);

        return view('partials.viewproductsbycategory', compact('category'));
    }

    /**
     * @param Category $category
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        $category = Category::all();
        $category = $category->load('role');

        return view('categories.edit', compact('category'));
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Category $category, Request $request)
    {
        $category->update($this->validateRequest());
        $category->save();

        return redirect('/categories');
    }

    /**
     * @param Category $category
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
    }
}
