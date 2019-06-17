<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Argument extends Model
{
  protected $fillable = ['topic', 'sub_id'];

  public function test()
  {
    return $this->belongsTo('App\Test');
  }

  public function subjects()
  {
    return $this->belongsTo('App\Subject');
  }

}
