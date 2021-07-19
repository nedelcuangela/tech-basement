<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * RoleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('products.create');
    }

    public function destroy (Role $role) {
        $role->delete();

        return redirect('roles');
    }

    /**
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update(Role $role)
    {
        $role->update($this->validateRequest());

        return redirect('roles/'.$role->id);
    }

    /**
     * @param Role $role
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * @param Role $role
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }


    public function index()
    {

//        if(auth()->check() && !auth()->user()->hasRole('admin'))
//        {
//            return redirect('/');
//        }

        $roles = \App\Models\Role::all();

        return view('roles.index', compact('roles'));
    }

    /**
     * @return array
     */


    private function validateRequest()
    {
        return request()->validate([
            'name'=>'required|min:3',
            'slug'=>'required|min:3',
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
                'name' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
                'slug' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
            ]);

            if ($validator->fails())
            {
                return redirect()->back()->with(['error' => 'Validation failed'])->withErrors($validator->errors())->withInput($request->all());
            }

            $role = new Role();
            $role->name = $request->get('name');
            $role->slug = $request->get('slug');

            if ($role->save())
            {
                return redirect()->back()->with(['success' => 'Role created']);
            }

        } catch (\Exception $e)
        {
            return redirect()->back()->with(['error' => 'Role not created']);
        }
    }
}
