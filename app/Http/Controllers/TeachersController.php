<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Subject;
use App\Branch;
use App\Group;
use App\Teacher;
use Hash;
use App\Group_branch_subject_teacher;


class TeachersController extends Controller
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
        $teacheres = Teacher::all();//Get all Group
        return view('teacher.index')->with('teacheres', $teacheres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|unique:teachers',
            'password'=>'required',
            'phone'=>'required',
            
            
            ]
        );

        $name = $request['name'];
        $email = $request['email'];
        $password =  Hash::make($request['password']);
        $phone = $request['phone'];
        $teacher = new Teacher();
        $teacher->name = $name;
        $teacher->email = $email;
        $teacher->password = $password;
        $teacher->phone = $phone;
        
        //dd($subjects);

        $teacher->save();
      
        // dd( $subject);
  

        return redirect()->route('teacher.create')
        ->with('flash_message',
         'Teacher'. $teacher->name.' added!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);


        return view('teacher.edit', compact('teacher'));
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
        ]);
  

    $form_data = array(
        'name'     =>  $request->name,
        'email'    =>  $request->email,
        'password'     =>  Hash::make($request['password']),
        'phone'     =>  $request->phone
    );

    Teacher::whereId($id)->update($form_data);
    return redirect('teacher')->with('success', 'Data Edited successfully.');


   


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teacher.index')
            ->with('flash_message',
             'Teacher deleted!');
    }
}
