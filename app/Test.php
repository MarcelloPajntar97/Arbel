<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  protected $fillable = ['topic_id', 'questions'];

  public function arguments()
  {
      return $this->hasMany('App\Arguments');
  }
}
