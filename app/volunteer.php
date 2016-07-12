<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class volunteer extends Authenticatable
{
    //



             protected $fillable = [
               'email',
               'password'

             ];


             protected $hidden = [
                 'password', 'remember_token',
             ];



}
