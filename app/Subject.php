<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = ['user_id'];
  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function class()
  {
      return $this->belongsTo('App\ClassModel');
  }

  public function students()
  {
      return $this->belongsToMany('App\Student');
  }

  public function arguments()
  {
      return $this->hasMany('App\Arguments');
  }


}
