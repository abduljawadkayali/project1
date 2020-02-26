<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
class YearsController extends Controller
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
        $data = Year::latest()->paginate(5);
            
        return view('year.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('year.create');
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
        Year::create($form_data);

        return redirect('year/create')->with('success', 'Data Added successfully.');
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
        $data = Year::findOrFail($id);

        return view('year.edit', compact('data'));
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

    Year::whereId($id)->update($form_data);
    return redirect('year')->with('success', 'Data Edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Year::findOrFail($id);
        
        
        $data->delete();
        return redirect('year')->with('success', 'Data Deleted successfully.');
    }
}
