<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {
            return view('welcome');
        }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function dashboards()
    {
        $role=Auth::user()->role;
        if($role=='user'){
            return view('user');
        }
        if($role=='admin'){
            return view('admin');
        }
        if($role=='staff'){
            return view('staff');
        }
        else{
            return view('welcome');
        }
    }
}
