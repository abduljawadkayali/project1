<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
class StaffsController extends Controller
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
        $data = Staff::where('branch', '2')->paginate(5);
       
        return view('photo.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function photo($id)
    {
    
        $data = Staff::where('branch', $id)->paginate(5);
        return view('staff.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $page=$request->branch ;
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'branch'    =>  'required',
            'description'     =>  'required',
          
            'image'         =>  'image|max:2048',
            'mail' => 'required',
            'whatsup' => 'required',
            'facebook' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'   => $request->name,
            'job'   => $request->job,

            'branch'       =>   $request->branch,
            'description'        =>   $request->description,
           
            'image'            =>   $new_name,
            'mail'       =>   $request->mail,
            'whatsup'       =>   $request->whatsup,
            'facebook'       =>   $request->facebook
        );

        Staff::create($form_data);

       
        return redirect()->action('StaffsController@photo', ['id' => $page])->with('success', 'Data Added successfully.');
   

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Staff::findOrFail($id);
        return view('staff.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Staff::findOrFail($id);
        return view('staff.edit', compact('data'));
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
        $page=$request->branch ;
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name' => 'required',
                'job' => 'required',
                'branch'    =>  'required',
                'description'     =>  'required',
              
                'image'         =>  'image|max:2048',
                'mail' => 'required',
                'whatsup' => 'required',
                'facebook' => 'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'job' => 'required',
                'branch'    =>  'required',
                'description'     =>  'required',
              
          
                'mail' => 'required',
                'whatsup' => 'required',
                'facebook' => 'required'
            ]);
        }

        $form_data = array(

            'name'   => $request->name,
            'job'   => $request->job,

            'branch'       =>   $request->branch,
            'description'        =>   $request->description,
           
            'image'            =>   $image_name,
            'mail'       =>   $request->mail,
            'whatsup'       =>   $request->whatsup,
            'facebook'       =>   $request->facebook


        );

        Staff::whereId($id)->update($form_data);
        return redirect()->action('StaffsController@photo', ['id' => $page])->with('success', 'Data is successfully updated');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staff::findOrFail($id);
        $page=$data->branch ;
        
        $data->delete();
        return redirect()->action('StaffsController@photo', ['id' => $page]);
        
    }
}
