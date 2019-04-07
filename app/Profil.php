<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
   protected $fillable = [
     'name', 'surname', 'description', 'birthdate', 'email'
   ];
}
