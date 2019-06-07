<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  protected $table = 'events';
  // protected $fillable = [
  //     'weekDay', 'weekHour', 'start_date', 'end_date'
  // ];
  protected $fillable = [
      'subject', 'start_date', 'end_date', 'sub_id'
  ];

  public function event()
  {
    return $this->belongsTo('App\User');
  }
}
