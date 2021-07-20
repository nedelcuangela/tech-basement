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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }


//    public function create()
//    {
////        return view('users.create');
//    }
//
//
//    public function store()
//    {
////        $data = $this->validateRequest();
////
////        $user = User::query()->create([
////            'name' => $data['name'],
////            'email' => $data['email'],
////            'password' => $data['password']
////        ]);
////
////        return redirect()->route('users.store');
//    }
//
//
//    public function show(Category $category)
//    {
//        $product = DB::table('products')->where('category', $this->category);
//
//        dd($product);
//        return view('partials.viewproductsbycategory', compact('category'));
//    }
//
//    public function edit(User $user)
//    {
////        $roles = Role::all();
////        $user = $user->load('role');
////
////        return view('users.edit', compact('user', 'roles'));
//    }
//
//
//    public function update(User $user, Request $request)
//    {
////        $user->update($this->validateRequest());
////        $user->role_id = $request->role;
////        $user->save();
////
////        return redirect('/users');
//    }
//
//
//    public function destroy(User $user)
//    {
////        $user->delete();
////
////        return redirect('users');
//
////    private function validateRequest() {
////        return request()->validate([
////            'name' => 'required|min:3',
////            'email'=> 'required|email',
////            'password' => 'required'
////        ]);
//    }
}
