<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Branch;
use App\Group;
use Hash;
use Illuminate\Support\Facades\DB;
class StudentsController extends Controller
{
    public function __construct() {
       

        $this->middleware('permission:Editor');
        
    
   }

   public function getGroups()
   {
       $group = DB::table('groups')->pluck("name","id");
      
 
  
       //dd($group);
       return view('student.create',compact('group'));
   }

   public function getBranches($id) 
   { 
       $branc = DB::table("branch_group")->where("group_id",$id)->get()->pluck("branch_id");    
       $items = array();
       foreach ($branc as $b) {        
           $branches = DB::table("branches")->where("id",$b)->pluck("name", "id");        
           $items[] = $branches;     
           
       }
       
      
       return json_encode($items);
   }
   
 


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();//Get all Group
     

        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        
        //dd($request['branch']);
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'number'=>'required|unique:students',
            'group'=>'required|exists:groups,id',
            'branch'=>'required',
            
            
            ]
        );

        $name = $request['name'];
        $email = $request['email'];
        $password =  Hash::make($request['password']);
        $phone = $request['phone'];
        $number = $request['number'];
        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->password = $password;
        $student->phone = $phone;
        $student->number = $number;
        $student->group_id = $request['group'];
        $student->branch_id = $request['branch']; 
        $student->save();
      
     


        return redirect()->route('AddStudent')
        ->with('flash_message',
         'Student'. $student->name.' added!'); 
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
        $student = Student::findOrFail($id);
        $group = Group::all(); 


        return view('student.edit', compact('student', 'group'));
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
        $student = Student::findOrFail($id);
        //dd($student);
        

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',     
            'number' => 'required|unique:students,number,'.$student->id,
            'group'=>'required|exists:groups,id',
            'branch'=>'required',
            
            
            
            ]
        );

        $form_data = array(

            'name'   => $request->name,
            'email'   => $request->email,
            'password'       =>   Hash::make($request['password']),
            'phone'        =>   $request->phone,           
            'number'            =>   $request->number,
            'group_id'            =>   $request->group,
            'branch_id'            =>   $request->branch,
      


        );

        Student::whereId($id)->update($form_data);
    
       

        return redirect()->route('student.index')
        ->with('flash_message',
         'Student'. $student->name.' Updated!'); 

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')
            ->with('flash_message',
             'Student deleted!');
    }
}
