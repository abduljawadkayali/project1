<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function kg(){
        return view('kg');
    }

    public function firstschool(){
        return view('firstschool');
    }
    
    public function secschool(){
        return view('secschool');
    }

    public function highschool(){
        return view('highschool');
    }

    public function login(){
        return view('login');
    }

    public function mangement(){
        return view('mangement');
    }

    public function kgmang(){
        return view('kgmang');
    }

    public function firstmang(){
        return view('firstmang');
    }

    public function secondmang(){
        return view('secondmang');
    }

    public function highmang(){
        return view('highmang');
    }

    public function club(){
        return view('club');
    }
    
    public function bus(){
        return view('bus');
    }

    public function service(){
        return view('service');
    }
    
    public function interviewofice(){
        return view('interviewofice');
    }

    public function conectus(){
        return view('conectus');
    }
  
    public function test(){
        return view('test');
    }
    
        
    
}
