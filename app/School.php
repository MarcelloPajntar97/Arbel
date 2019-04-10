<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  public function classes()
  {
      return $this->belongsTo('App\ClassModel');
  }

  public function classrooms()
  {
      return $this->hasMany('App\Classroom');
  }
}
