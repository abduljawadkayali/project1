<?php

namespace App\Http\Controllers\Student;


use Illuminate\Http\Request;
use App\StudentAdmin;
use App\Http\Controllers\Controller;

use App\Year;
use Auth;
use App\Semister;
use App\Group;
use App\Student;
use App\Branch;
use App\Exam;
use App\Subject;
use App\Result;
use App\Group_branch_subject_teacher as TeacherRelation;

class StudentHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $student_id = Auth::guard('students')->user()->id;
        //dd($student_id);
        $data= Result::where('student_id', $student_id)->get()->pluck('year')->unique();
       // dd($data);
        foreach($data as $key=>$value){
          //dd($value->year);
           $data[$key]['route']= route('student.year', $value->id);
          //dd($data);
        }
        //dd($data);
        return view('StudentAdmin.index', [
            'data'=>$data ,
            'header'=>'year',
        ]);
       
    }

    public function year($year_id)
    {
        $data= Semister::all();
        foreach($data as $key=>$value){
           $data[$key]['route']= route('student.semister',[$year_id , $value->id]);
           //dd($data);
        }
        return view('StudentAdmin.index', [
            'data'=>$data ,
            'header'=>'Semister',
        ]);
        
        
    }

    public function semister($year_id, $semister_id)
    {
        //dd($semister_id);
        //$data= TeacherRelation::where()->get();
        $student_id = Auth::guard('students')->user()->id;
       
        //dd($student_id);
       $data = Exam::all();
     //  dd($data);
       foreach($data as $key=>$value){
         // dd($value);
        $data[$key]['route']= route('student.class',[$year_id, $semister_id, $value->id]);
        //dd($data);
       }
       
       return view('StudentAdmin.index', [
           'data'=>$data ,
           'header'=>'Exam',
       ]);
    }

    public function class($year_id, $semister_id, $exam_id)
    {
        $student_id = Auth::guard('students')->user();

        $data = Result::where('student_id', $student_id->id)->
        where('year_id', $year_id)->
        where('semister_id', $semister_id)->
        where('exam_id', $exam_id)->
        get();



       //dd($result);
       return view('StudentAdmin.show', [
        'data'=>$data,
        'year_id'=>$year_id,
        'semister_id'=>$semister_id,
        'exam_id'=>$exam_id,
    ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
