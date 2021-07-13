<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        if (auth()->check() && !auth()->user()->hasRole('admin'))
//        {
//            return redirect('/');
//        }

        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create() {
        $users = new User();

        return view('users.create', compact('users'));
    }

    public function store(User $user) {
        $user = User::create($this->validateRequest());

        return redirect('users');
    }

    public function show(\App\Models\User $user) {
        return view('users.show', compact('user'));
    }

    public function edit(User $user) {
        $roles = Role::all();
        $user = $user->load('role');

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(User $user, Request $request) {
        $user->update($this->validateRequest());
//        $role->role_id = $request->role;
//        $role->save();
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect('users');
    }

    private function validateRequest() {
        return request()->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'password' => 'required'
        ]);
    }
}
