<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semister;
class SemistersController extends Controller
{
    public function __construct() {
       

        $this->middleware('permission:Editor');
        
    
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Semister::latest()->paginate(5);
            
        return view('semister.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semister.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     =>  'required'

        ]);

        

        $form_data = array(
            'name'        =>   $request->name,
            
        );
        Semister::create($form_data);

        return redirect('semister/create')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Semister::findOrFail($id);

        return view('semister.edit', compact('data'));
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
        $request->validate([
            'name'     =>  'required'
        ]);
  

     $form_data = array(
        'name'     =>  $request->name
    );

    Semister::whereId($id)->update($form_data);
    return redirect('semister')->with('success', 'Data Edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Semister::findOrFail($id);
        
        
        $data->delete();
        return redirect('semister')->with('success', 'Data Deleted successfully.');
    }
}
