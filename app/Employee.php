<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
        'name',
        'phone',
        'email',
        'address',
        'designation',
        'user_id',
        'image',
    ];
}
