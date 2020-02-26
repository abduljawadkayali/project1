<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Teacher;
use App\Branch;
use App\Subject;
use App\Year;
use App\Semister;

use Illuminate\Database\Eloquent\SoftDeletes;
class Group_branch_subject_teacher extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'teacher_id', 'group_id', 'branch_id', 'subject_id' , 'year_id', 'semister_id'
    ];

    public function teacher()
    {
        return $this->BelongsTo(Teacher::class);
    }

    public function branch()
    {
        return $this->BelongsTo(Branch::class);
    }

    public function group()
    {
        return $this->BelongsTo(Group::class);
    }


    public function subject()
    {
        return $this->BelongsTo(Subject::class);
    }

    public function year()
    {
        return $this->BelongsTo(Year::class);
    }

    public function semister()
    {
        return $this->BelongsTo(Semister::class);
    }


}
