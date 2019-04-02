<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function classes()
  {
      return $this->belongsTo('App\Class');
  }
}
