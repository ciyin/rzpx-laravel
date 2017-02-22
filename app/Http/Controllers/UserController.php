<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::id();
        $role_id=User::find($user_id)->role_id;
        $roles=Role::all();
        $users=User::with('role')->orderBy('created_at','desc')->simplePaginate(10);
        return view('page/userlist',['role_id'=>$role_id,'roles'=>$roles,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id=Auth::id();
        $role_id=User::find($user_id)->role_id;
        $roles=Role::all();
        $users=User::with('role')
            ->where('users.name','like','%'.$_GET['search_user'].'%')
            ->orderBy('created_at','desc')
            ->simplePaginate(10);
        return view('page/userlist',['role_id'=>$role_id,'roles'=>$roles,'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user=new User();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role_id=$request->role;
        $user->status=1;
        $user->city=$request->city;
        $user->created_by=Auth::id();
        $user->save();
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
