<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable =[
        'name',
        'password',
        'email',
        'role',
        'token'
    ];
}
