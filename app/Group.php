<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\Branch;
use App\Teacher;
use App\Student;

use Illuminate\Database\Eloquent\SoftDeletes;
class Group extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'classNum'
    ];

    public function students()
    {
    	return $this->hasMany('App\Student');
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }
    public function subjectes()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function teacheres()
    {
        return $this->belongsToMany(Teacher::class);
    }
}

