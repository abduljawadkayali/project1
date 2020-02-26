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
        $this->middleware('auth')->except(["index", "NotLogin"]);
        $this->middleware('isAdmin')->only(["AdminDashbored"]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
        if (Auth::check()){
            //$this->middleware(['isAdmin']);
            if (Auth::user()->hasPermissionTo('isAdmin'))
                return (HomeController::AdminDashbored());
            elseif (Auth::user()->hasPermissionTo('Designer'))
                return (HomeController::DesignerDashbored());
            elseif (Auth::user()->hasPermissionTo('Editor'))
                return (HomeController::EditorDashbored());
            else {
                Auth::logout();
                return (HomeController::NotLogin());
            }
        }
        else
            return (HomeController::NotLogin());


    }

    public function NotLogin()
    {
        return redirect()->action('PagesController@welcome');
    }

    public function AdminDashbored()
    {
        return redirect()->route('users.index');
       // dd("admin");
        //return view('users');
    }

    public function DesignerDashbored()
    {
        
        return redirect()->route('crud.create');
    }
    public function EditorDashbored()
    {
        
        return redirect()->route('AddStudent');
    }
}