<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  protected $table = 'events';
  protected $fillable = [
      'weekDay', 'weekHour', 'start_date', 'end_date'
  ];

  public function event()
  {
    return $this->belongsTo('App\Subject');
  }
}
