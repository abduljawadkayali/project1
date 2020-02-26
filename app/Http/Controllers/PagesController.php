<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use App\Post;
use App\Staff;
class PagesController extends Controller
{

    public function welcome()
    {

        $data = Crud::where('web_page', '1')->paginate(50);
        $dataText = Post::where('page', '1')->paginate(50);
        $post = Post::latest()->where('page', '0')->paginate(50);
        return view('pages.welcome', compact('data', 'dataText', 'post'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }
    public function home(){
        return view('home');
    }

    public function kg()
    {

        $data = Crud::where('web_page', '2')->paginate(50);
        $dataText = Post::where('page', '2')->paginate(50);

        return view('pages.kg', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function firstschool()
    {

        $data = Crud::where('web_page', '3')->paginate(50);
        $dataText = Post::where('page', '3')->paginate(50);

        return view('pages.firstschool', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function secschool()
    {

        $data = Crud::where('web_page', '4')->paginate(50);
        $dataText = Post::where('page', '4')->paginate(50);
        return view('pages.secschool', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function highschool()
    {

        $data = Crud::where('web_page', '5')->paginate(50);
        $dataText = Post::where('page', '5')->paginate(50);
        return view('pages.highschool', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }



    public function login(){
        return view('pages.tstt');
    }

    public function mangement(){

        $data = Staff::where('branch', '11')->paginate(150);

        return view('pages.mangement', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 150);


    }


    public function kgmang(){
        $data = Staff::where('branch', '12')->paginate(150);
        return view('pages.kgmang', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 150);

    }

    public function firstmang(){
        $data = Staff::where('branch', '13')->paginate(150);
        return view('pages.firstmang', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 150);

    }

    public function secondmang(){
        $data = Staff::where('branch', '14')->paginate(150);
        return view('pages.secondmang', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 150);

    }

    public function highmang(){
        $data = Staff::where('branch', '15')->paginate(150);
        return view('pages.highmang', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 150);

    }

    public function news()
    {

        $data = Crud::where('web_page', '6')->paginate(50);
        $dataText = Post::where('page', '6')->paginate(50);
        return view('pages.news', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function club()
    {

        $data = Crud::where('web_page', '7')->paginate(50);
        $dataText = Post::where('page', '7')->paginate(50);

        return view('pages.club', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function bus()
    {

        $data = Crud::where('web_page', '8')->paginate(50);
        $dataText = Post::where('page', '8')->paginate(50);
        return view('pages.bus', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function service()
    {

        $data = Crud::where('web_page', '9')->paginate(50);
        $dataText = Post::where('page', '9')->paginate(50);
        return view('pages.service', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function interviewofice()
    {

        $data = Crud::where('web_page', '10')->paginate(50);
        $dataText = Post::where('page', '10')->paginate(50);
        return view('pages.interviewofice', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function conectus(){
        return view('pages.conectus');
    }

    public function test(){
        return view('pages.test');
    }



}
