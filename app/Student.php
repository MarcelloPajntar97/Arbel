<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['details'];
  public function class()
  {
      return $this->belongsTo('App\ClassModel');
  }

  public function subjects()
  {
      return $this->belongsToMany('App\Subject');
  }
}
