<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Subject;

use App\Branch;

use Illuminate\Database\Eloquent\SoftDeletes;
class Teacher extends Model
{
    use SoftDeletes;
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
    public function subjectes()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }

    protected $fillable = [
    	'name', 'email', 'password', 'phone'
    ];
}
