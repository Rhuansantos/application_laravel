<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
  protected $fillable = [
    'description',
    'age',
    'pet_type',
    'size',
    'name',
    'breed'
  ];

  public function relationOrgToPet(){

    belongsToMany('App\organization_id');
  }
}
