<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  public function arguments()
  {
      return $this->hasMany('App\Arguments');
  }
}
