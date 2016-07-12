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


class Organization extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */






         protected $fillable = [
           'organization',
           'state',
           'active',
           'email',
           'password'

         ];


         protected $hidden = [
             'password', 'remember_token',
         ];


}
