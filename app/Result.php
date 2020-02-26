<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Result extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'student_id', 'year_id', 'semister_id', 'exam_id', 'subject_id', 'degree'
    ];

    public function student()
    {
        return $this->BelongsTo(Student::class);
    }

    public function subject()
    {
        return $this->BelongsTo(Subject::class);
    }

    public function year()
    {
        return $this->BelongsTo(Year::class);
    }


    public function exam()
    {
        return $this->BelongsTo(Exam::class);
    }

    public function semister()
    {
        return $this->BelongsTo(Semister::class);
    }

}
