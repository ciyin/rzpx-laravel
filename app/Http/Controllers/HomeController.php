<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::id();
        $user=User::find($user_id);
        $role_id=$user->role_id;
        if ($role_id==1){
            return redirect('/role');
        }elseif($role_id==2){
            return redirect('/user');
        }else{
            return redirect('/project');
        }
    }
}
