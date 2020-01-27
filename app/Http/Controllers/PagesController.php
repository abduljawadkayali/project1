<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function welcome(){
        return view('pages.welcome');
    }

    public function kg(){
        return view('pages.kg');
    }

    public function firstschool(){
        return view('pages.firstschool');
    }
    
    public function secschool(){
        return view('pages.secschool');
    }

    public function highschool(){
        return view('pages.highschool');
    }

    public function login(){
        return view('pages.tstt');
    }

    public function mangement(){
        return view('pages.mangement');
    }

    public function kgmang(){
        return view('pages.kgmang');
    }

    public function firstmang(){
        return view('pages.firstmang');
    }

    public function secondmang(){
        return view('pages.secondmang');
    }

    public function highmang(){
        return view('pages.highmang');
    }

    public function club(){
        return view('dashbored.rtl');
    }
    
    public function bus(){
        return view('pages.bus');
    }

    public function service(){
        return view('pages.service');
    }
    
    public function interviewofice(){
        return view('pages.interviewofice');
    }

    public function conectus(){
        return view('pages.conectus');
    }
  
    public function test(){
        return view('pages.test');
    }
    
        
    
}
