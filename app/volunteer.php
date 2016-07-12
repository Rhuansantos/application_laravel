<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

// class Organization extends Model
// {
//     //
//     protected $fillable = [
//       'organization',
//       'state',
//       'active',
//       'email',
//       'password'
//
//     ];
// }


class Volunteer extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */






         protected $fillable = [
           'email',
           'password'

         ];


         protected $hidden = [
             'password', 'remember_token',
         ];


}
