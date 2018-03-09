<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ultimate extends Model
{
    //Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'password',
    ];

    //hidden attributes
    protected $hidden = [
        'password', 'remember_token',
    ];

}
