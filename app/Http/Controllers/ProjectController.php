<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
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
        $name=$user->name;
        if ($role_id==1 || $role_id==2){
            $projects=DB::table('projects')
                ->join('roles','roles.id','=','projects.role_id')
                ->select('projects.*','roles.role')
                ->get();
            return view('page/projectlist',['name'=>$name,'role_id'=>$role_id,'projects'=>$projects]);
        }else{
            $projects=DB::table('projects')
                ->join('roles','roles.id','=','projects.role_id')
                ->select('projects.*','roles.role')
                ->where('projects.role_id','=',$role_id)
                ->get();
            return view('page/projectlist',['name'=>$name,'role_id'=>$role_id,'projects'=>$projects]);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('project/'.$id);
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
