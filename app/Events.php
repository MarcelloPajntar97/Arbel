<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  protected $table = 'events';


  protected $fillable = [
      'activity', 'day', 'start_hour', 'end_hour', 'user_id'
  ];

  public function event()
  {
    return $this->belongsTo('App\User');
  }
}
