<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;
use Session;

class PostsController extends Controller {

    
    public function __construct() {
       

        $this->middleware('permission:Designer')->except(['display']);;
    
   }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {
        $dataText = Post::where('page', $id)->paginate(5);
        return view('post.index', compact('dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function text($id)
    {
    
        $dataText = Post::where('page', $id)->paginate(5);
        return view('post.index', compact('dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 

        $numb=$request->page ;
        $request->validate([
            'title'     =>  'required',
            'page'    =>  'required',
            'body'     =>  'required'

        ]);

        

        $form_data = array(
            'title'        =>   $request->title,
            'page'       =>   $request->page,
            'body'        =>   $request->body
            
        );

        Post::create($form_data);

       
        return redirect()->action('PostsController@create', ['id' => $numb])->with('success', 'Data Added successfully.');
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $dataText = Post::findOrFail($id);

        return view('post.edit', compact('dataText'));
    }

    public function show($id)
    {
        $dataText = Post::findOrFail($id);
        return view('post.view', compact('dataText'));
    }

    public function display($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $numb=$request->page ;
      
     
        
            $request->validate([
                'title'     =>  'required',
                'page'    =>  'required',
                
                'body'     =>  'required'
            ]);
      

        $form_data = array(
            'title'     =>  $request->title,
            'page'    =>  $request->page,
            'body'     =>  $request->body
        );

        Post::whereId($id)->update($form_data);
        return redirect()->action('PostsController@text', ['id' => $numb]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $dataText = Post::findOrFail($id);
        $numb=$dataText->page ;
        
        $dataText->delete();
        return redirect()->action('PostsController@text', ['id' => $numb]);
    }
}