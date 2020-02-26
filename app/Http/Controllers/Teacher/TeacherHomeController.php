<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\TeacherAdmin;
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
class TeacherHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data= Year::all();
        foreach($data as $key=>$value){
           $data[$key]['route']= route('teacher.year', $value->id);
           //dd($data);
        }
        return view('TeacherAdmin.index', [
            'data'=>$data ,
            'header'=>'year',
        ]);
        
        
    }

    public function year($year_id)
    {
        $data= Semister::all();
        foreach($data as $key=>$value){
           $data[$key]['route']= route('teacher.semister',[$year_id , $value->id]);
           //dd($data);
        }
        return view('TeacherAdmin.index', [
            'data'=>$data ,
            'header'=>'Semister',
        ]);
        
        
    }
    public function semister($year_id, $semister_id)
    {
        //dd($semister_id);
        //$data= TeacherRelation::where()->get();
        $teacher_id = Auth::guard('teachers')->user()->id;
        //dd($teacher_id);
        $data = TeacherRelation::where('teacher_id',$teacher_id)->select('group_id')->with('group')->groupBy('group_id')->get()->pluck('group');

        foreach($data as $key=>$value){
            //dd($vdataalue->name);
         $data[$key]['route']= route('teacher.class',[$year_id, $semister_id , $value->id]);
           //dd($data);
        }
        
        return view('TeacherAdmin.index', [
            'data'=>$data ,
            'header'=>'class',
        ]);
    }

        public function class($year_id, $semister_id, $class_id)
        {
            //dd($class_id);
            //$data= TeacherRelation::where()->get();
             $teacher_id = Auth::guard('teachers')->user()->id;
             //dd($teacher_id);
            $data = TeacherRelation::where('teacher_id',$teacher_id)->select('branch_id')->with('branch')->groupBy('branch_id')->get()->pluck('branch');
            //dd($data);
            foreach($data as $key=>$value){
               // dd($value->id);
             $data[$key]['route']= route('teacher.branch',[$year_id, $semister_id ,$class_id,  $value->id]);
            // dd($data);
            }
            
            return view('TeacherAdmin.index', [
                'data'=>$data ,
                'header'=>'--branch--',
            ]);
        }

        public function branch($year_id, $semister_id, $class_id, $branch_id)
        {
            //dd($semister_id);
            //$data= TeacherRelation::where()->get();
             $teacher_id = Auth::guard('teachers')->user()->id;
             //dd($teacher_id);
            $data = TeacherRelation::where('teacher_id',$teacher_id)->
            where('semister_id',$semister_id)->
            where('group_id',$class_id)->
            where('branch_id',$branch_id)->
            select('subject_id')->
            with('subject')->
            groupBy('subject_id')->
            get()->pluck('subject');
            //dd($data);
            foreach($data as $key=>$value){
          
             $data[$key]['route']= route('teacher.subject',[$year_id, $semister_id, $class_id, $branch_id , $value->id]);
               //dd($data);
            }
            
            return view('TeacherAdmin.index', [
                'data'=>$data ,
                'header'=>'Subject',
            ]);
        }
        

        
        public function subject($year_id, $semister_id,  $class_id, $branch_id, $subject_id)
        {
            //dd($class_id);
            //$data= TeacherRelation::where()->get();
             $teacher_id = Auth::guard('teachers')->user()->id;
             //dd($teacher_id);
            $data = Exam::all();
          //  dd($data);
            foreach($data as $key=>$value){
              // dd($value);
             $data[$key]['route']= route('teacher.exam',[$year_id, $semister_id ,$class_id, $branch_id, $subject_id,  $value->id]);
             //dd($data);
            }
            
            return view('TeacherAdmin.index', [
                'data'=>$data ,
                'header'=>'Exam',
            ]);
        }

        public function exam($year_id, $semister_id,  $class_id, $branch_id, $subject_id, $exam_id)
        {

           // dd($class_id);
            $data = Student::where('group_id',$class_id)->
            where('branch_id',$branch_id)->
            get();
//dd($data);
            foreach($data as $key=>$value){
            
             $data[$key]['route']= route('teacher.student',[$year_id, $semister_id ,$class_id, $branch_id, $subject_id, $exam_id,  $value]);
            // dd($data);
            //dd($value);


            }
           // dd($data);
            
            return view('TeacherAdmin.create', [
                'data'=>$data ,
                'header'=>'Student',
                'year_id'=>$year_id,
                'semister_id'=>$semister_id,
                'class_id'=>$class_id,
                'branch_id'=>$branch_id,
                'subject_id'=>$subject_id,
                'exam_id'=>$exam_id,
            ]);
        }

 
        public function action($year_id, $semister_id, $class_id, $branch_id, $subject_id, $exam_id)
        {
            $data = Result::where('year_id',$year_id)->
            where('semister_id',$semister_id)->
            where('exam_id',$exam_id)->
            where('subject_id',$subject_id)->
            get();
            //dd($data);
            return view('TeacherAdmin.show', [
                'data'=>$data,
                'year_id'=>$year_id,
                'semister_id'=>$semister_id,
                'class_id'=>$class_id,
                'branch_id'=>$branch_id,
                'subject_id'=>$subject_id,
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
       // dd( $request);

       $data = $request['student_id'];
       //dd( $data);
       foreach($data as $key=>$value){
       
           $degree = $request['degree'][$key];
            $student_id = $request['student_id'][$key];
            $exam_id = $request['exam_id'];
            $subject_id = $request['subject_id'];
            $year_id = $request['year_id'];
            $semister_id = $request['semister_id'];

            $result = new Result();
           $result->degree = $degree;
         $result->student_id = $student_id;
          $result->exam_id = $exam_id;
         $result->subject_id = $subject_id;
            $result->year_id = $year_id;
         $result->semister_id = $semister_id;

         $result_exist = Result::where([
             ['student_id', $student_id],
                ['exam_id', $exam_id],
                ['subject_id', $subject_id],
              ['year_id', $year_id],
             ['semister_id', $semister_id]
             ])->get();
                if(count($result_exist)>0){
                 

                 }
                else {
                 $result->save(); 
                
                 }

        }
       // return back()->withInput()->with('error', 'Student has result.');
       return back()->withInput()->with('succes', 'Student has result.');
        dd($value);
    


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
        $data = Result::findOrFail($id);
       
        
        $data->delete();
        return redirect()->back();
    }
}
