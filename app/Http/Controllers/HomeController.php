<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth')->except(["index"]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      dd("this is index funsda"); 
       
      //return view('home');
       
    }

    public function Dashbored()
    {
       dd("this is dashbored funsda");
    }

    public function AdminDashbored()
    {
       
    }

    public function NotAdminDashbored()
    {
       
    }
}
