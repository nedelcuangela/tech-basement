<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;


class PermissionController extends Controller
{

    /**
     * PermissionController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * @return Factory|Application|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('permissions.index', compact('permissions'));
    }

    /**
     * @param Permission $permission
     * @return RedirectResponse|Redirector
     */
    public function update(Permission $permission)
    {
        $permission->update($this->validateRequest());

        return redirect('permissions/'.$permission->id);
    }

    /**
     * @param Permission $permission
     * @return Factory|View
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    /**
     * @param Permission $permission
     * @return Factory|View
     */
    public function show(Permission $permission)
    {
        return view('permissions.show', compact('permission'));
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
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->except('_token'), [
                'name' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
                'slug' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
            ]);

            if ($validator->fails()) {

                return redirect()->back()->with(['error' => 'Validation failed'])->withErrors($validator->errors())->withInput($request->all());
            }

            $permission = new Permission();
            $permission->name = $request->get('name');
            $permission->slug = $request->get('slug');

            if ($permission->save()) {

                return redirect()->back()->with(['succes' => 'Role created!']);
            }
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'Role not Created!']);
        }
    }
}
