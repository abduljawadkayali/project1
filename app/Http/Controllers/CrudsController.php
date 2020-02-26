<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    public function __construct() {
       

        $this->middleware('permission:Designer');
        
    
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = Crud::where('web_page', '2')->paginate(5);
       
        return view('photo.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
                
    }

    public function photo($id)
    {
    
        $data = Crud::where('web_page', $id)->paginate(5);
        return view('photo.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
                
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $page=$request->web_page ;
        $request->validate([
            'web_page'    =>  'required',
            'description'     =>  'required',
            'title'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'web_page'       =>   $request->web_page,
            'description'        =>   $request->description,
            'title'        =>   $request->title,
            'image'            =>   $new_name
        );

        Crud::create($form_data);

       
        return redirect()->action('CrudsController@create', ['id' => $page])->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('photo.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('photo.edit', compact('data'));
          
      
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
        $page=$request->web_page ;
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'web_page'    =>  'required',
                'description'     =>  'required',
                'title'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'web_page'    =>  'required',
                'title'     =>  'required',
                'description'     =>  'required'
            ]);
        }

        $form_data = array(
            'web_page'    =>  $request->web_page,
            'description'     =>  $request->description,
            'title'     =>  $request->title,
            'image'         =>  $image_name
        );

        Crud::whereId($id)->update($form_data);
        return redirect()->action('CrudsController@photo', ['id' => $page])->with('success', 'Data is successfully updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $page=$data->web_page ;
        
        $data->delete();
        return redirect()->action('CrudsController@photo', ['id' => $page]);
        
    }
}