<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Teacher;

use App\Student;

use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
    public function teacheres()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function students()
    {
    	return $this->hasMany('App\Student');
    }

    protected $fillable = [
    	'name'
    ];
}
