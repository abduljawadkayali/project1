<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Database\Query\Builder;
    use App\Subject;
    use App\Branch;
    use App\Group;
    use App\Year;
    use App\Semister;
    use App\Teacher;
    use App\Group_branch_subject_teacher;
    use Hash;
    use Illuminate\Support\Arr;
    class Group_branch_subject_teachersController extends Controller
    {
        public function __construct() {
        

            $this->middleware('permission:Editor');
            
        
    }

    public function getGroups()
    {
        $group = Group::all()->pluck("name","id");
        $teacher = Teacher::all()->pluck("name","id");
        $year = Year::all()->pluck("name","id");
        $semister = Semister::all()->pluck("name","id");
 
        //dd($teacher);
        return view('respon.create',compact('group', 'teacher', 'year', 'semister'));
    }
    public function getSubjects($id) 
{ 
    $subjects = DB::table("group_subject")->where("group_id",$id)->get()->pluck("subject_id");    
    $subjectitems = array();
    foreach ($subjects as $s) {        
        $subject = DB::table("subjects")->where("id",$s)->pluck("name","id")->toArray(); 
        $subjectitems[] = $subject;   
    }
    return json_encode($subjectitems);
}


    public function getBranches($id) 
{ 
    $branc = DB::table("branch_group")->where("group_id",$id)->get()->pluck("branch_id");    
    $items = array();
    foreach ($branc as $b) {        
        $branches = DB::table("branches")->where("id",$b)->pluck("name","id")->toArray();        
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
        
            $respon = Group_branch_subject_teacher::all();//Get all Group
       
            return view('respon.index')->with('respon', $respon);

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
            $this->validate($request, [
                'teacher'=>'required',
                'group'=>'required',
                'branch'=>'required',
                'subject'=>'required',
                'year'=>'required',
                'semister'=>'required',
               
                
                ]
            );
    
            $teacher_id = $request['teacher'];
          //  dd($request);
           
            $group_id = $request['group'];
           
            $branch_id = $request['branch'];
           

            $subject_id = $request['subject'];
            $year_id = $request['year'];
            $semister_id = $request['semister'];
     

            $relation = new Group_branch_subject_teacher();
            $relation->teacher_id = $teacher_id;
            $relation->group_id = $group_id;
            $relation->branch_id = $branch_id;
            $relation->subject_id = $subject_id;

            $relation->year_id = $year_id;
            $relation->semister_id = $semister_id;
   
            
            //dd($subjects);
    
            $relation->save();
            return redirect()->route('relation')
            ->with('flash_message',
             'job added!'); 
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            
            $group = DB::table('groups')->pluck("name","id");
            $teacher = DB::table('teachers')->pluck("name","id");
        
            return view('respon.create',compact('group', 'teacher'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $respon = Group_branch_subject_teacher::findOrFail($id);
            $group = Group::all()->pluck("name","id");
            $teacher = Teacher::all()->pluck("name","id");
            $year = Year::all()->pluck("name","id");
            $semister = Semister::all()->pluck("name","id");

    
            return view('respon.edit', compact('respon', 'group', 'teacher', 'year', 'semister'));
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
          

            $teacher_id = Teacher::findOrFail($request['teacher']);
         
     
        $form_data = array(
            'teacher_id'     =>  $teacher_id->id,
        );
        $Group_branch_subject_teacher= Group_branch_subject_teacher::findOrFail($id);       
        $Group_branch_subject_teacher->update($form_data);
        return redirect()->route('respon.index')
            ->with('flash_message',
             'data updatad!');

        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Group_branch_subject_teacher::findOrFail($id);
           
            
            $data->delete();
            return redirect('respon')->with('success', 'Data Deleted successfully.');
        
          
        }
    }
