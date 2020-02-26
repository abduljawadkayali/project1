<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;
class StudentAdmin extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    protected $table='students';

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'number'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
