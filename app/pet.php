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
    'breed',
    'organization_id'
  ];

<<<<<<< HEAD

  public function relationOrgToPet(){

      return $this->belongsTo('App\organization', 'organization_id');

  }


  

=======
  // public function relationPets(){
  //     return $this->hasOne(organization::class);
  // }
>>>>>>> 3ab638fd5f139fc73983dfa1104f459160df4f72

}
