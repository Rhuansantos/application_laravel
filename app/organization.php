<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    protected $fillable = [
      'organization',
      'state',
      'active',
      'email',
      'password'

    ];
}
