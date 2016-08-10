<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;



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

         //
        //  public function relationPetToOrg(){
         //
        //    return $this->belongsToMany
        //    (
        //    'App\pet', // Model to link
        //    'organization_pets', // Intermediaty table
        //    'id', // Column Name for current model
        //    'pet_id' // Column name for joining model
        //  );
         //
        //  }



        public function hasManyPets(){

          return $this->hasMany('pet');

        }


}
