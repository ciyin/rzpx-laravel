<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user=User::find($user_id);
        $role_id=$user->role_id;
        $roles=DB::table('roles')
            ->select('roles.*')
            ->get();
        $users=DB::table('users')
            ->join('roles','roles.id','=','users.role_id')
            ->select('users.*','roles.role')
            ->get();
        return view('page/userlist',['role_id'=>$role_id,'roles'=>$roles,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input('username');
        $email=$request->input('email');
        $password=$request->input('password');
        $pwd=bcrypt($password);
        $role_id=$request->input('role');
        $status=1;
        $city=$request->input('city');
        $created_by=Auth::id();
        DB::table('users')->insert(
            ['name'=>$name,'email'=>$email,'password'=>$pwd,'role_id'=>$role_id,'status'=>$status,'city'=>$city,'created_by'=>$created_by]
        );
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
