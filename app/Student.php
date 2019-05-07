<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function classData()
  {
      return $this->belongsTo('App\ClassModel');
  }

  public function subjects()
  {
      return $this->belongsToMany('App\Subject');
  }
}
