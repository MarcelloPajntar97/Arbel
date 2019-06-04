<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  protected $fillable = [
      'weekDay', 'weekHour', 'start_date', 'end_date'
  ];

  // public function events()
  // {
  //   return $this->belongsToMany('App\Subject');
  // }
}
