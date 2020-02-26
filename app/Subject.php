<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Teacher;

use Illuminate\Database\Eloquent\SoftDeletes;
class Subject extends Model
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



    protected $fillable = [
    	'name', 'min', 'max'
    ];
}
