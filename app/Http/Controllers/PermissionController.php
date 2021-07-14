<?php
//
//namespace App\Http\Controllers;
//
//use App\Permission;
//use App\Role;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
//
//
//class PermissionController extends Controller
//{
//
//    /**
//     * PermissionController constructor.
//     */
//
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    /**
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//
//    public function create()
//    {
//        return view('permissions.create');
//    }
//
//    /**
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
//     */
//
//    public function index()
//    {
//        $permissions = Permission::all();
//        return view('permissions.index', compact('permissions'));
//    }
//
//    /**
//     * @param Permission $permission
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//
//    public function update(Permission $permission) {
//
//        $permission->update($this->validateRequest());
//
//        return redirect('permissions/'.$permission->id);
//    }
//
//    /**
//     * @param Permission $permission
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//
//    public function edit(Permission $permission) {
//
//        return view('permissions.edit', compact('permission'));
//    }
//
//    /**
//     * @param Permission $permission
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//
//    public function show(Permission $permission){
//
//        return view('permissions.show', compact('permission'));
//    }
//
//    /**
//     * @return array
//     */
//    private function validateRequest() {
//
//        return request()->validate([
//            'name'=>'required|min:3',
//            'slug'=>'required|min:3',
//        ]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function store(Request $request)
//    {
//        try {
//
//            $validator = Validator::make($request->except('_token'), [
//                'name' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
//                'slug' => ['required', 'min:3', 'max:15', 'unique:roles,name'],
//            ]);
//
//            if ($validator->fails()) {
//
//                return redirect()->back()->with(['error' => 'Validation failed'])->withErrors($validator->errors())->withInput($request->all());
//            }
//
//            $permission = new Permission();
//            $permission->name = $request->get('name');
//            $permission->slug = $request->get('slug');
//
//            if ($permission->save()) {
//
//                return redirect()->back()->with(['succes' => 'Role created!']);
//            }
//        } catch (\Exception $e) {
//            return redirect()->back()->with(['error' => 'Role not Created!']);
//        }
//    }
//}
