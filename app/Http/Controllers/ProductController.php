<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
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
     * @return Renderable
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {

        return view('users.create');
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function store() {

        $data = $this->validateRequest();

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        return redirect()->route('users.store');
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
        $user->role_id = $request->role;
        $user->save();

        return redirect('/users');
    }

    public function destroy(User $user)
    {
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
