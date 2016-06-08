<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'name', 'description', 'price',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'price',
  ];
}