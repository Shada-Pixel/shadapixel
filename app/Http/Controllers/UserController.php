<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    // function __construct()
    // {
    //     $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //     $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //     $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //     $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        // $users = User::latest()->paginate(5);

        // return view('admin.users.index',['users' => $users])
        //     ->with('i', ($request->input('page', 1) - 1) * 5);


        if ($request->ajax()) {

            $users = User::with('roles')->get();
            return Datatables::of($users)
                ->addColumn('intro', function (User $user) {
                    return $user->roles->first()->name;
                })
                ->make(true);
        }
        $users = User::with('roles')->get();
        // return $users->first()->roles->first()->name;
        return view('admin.users.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function create(): View
    {
        $roles = Role::all();

        return view('admin.users.create',['roles'=> $roles]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // : RedirectResponse
    public function store(StoreUserRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        // user photo
        if ($request->file('photo')) {
            $cover = $request->file('photo');
            $image_full_name = time().'photo'.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/users/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $user->photo = $image_url;
        }
        $user->save();

        $user->assignRole($request->role);
        return redirect()->route('users.index')->with(['status' => 200, 'message' => 'User Created!']);

    }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.users.edit',compact('user','roles','userRole'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  : RedirectResponse
    public function update(Request $request, $id)
    {
        // return $id;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required'
        ]);

        // $input = $request->all();

        // if(!empty($input['password'])){
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));
        // }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        // user photo
        if ($request->file('photo')) {
            // Delete old photo
            if ($user->photo) {
                unlink($user->photo);
            }
            $cover = $request->file('photo');
            $image_full_name = time() . 'photo' . '.' . $cover->getClientOriginalExtension();
            $upload_path = 'images/users/';
            $image_url = $upload_path . $image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $user->photo = $image_url;
        }

        $user->update();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->role);


        return redirect()->route('users.index')->with(['status' => 200, 'message' => 'User updated successfully']);

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $user = User::find($id);
        // Delete old photo
        if ($user->photo) {
            unlink($user->photo);
        }
        $user->delete();
        return response()->json(['success' => 'User deleted !']);
    }

}