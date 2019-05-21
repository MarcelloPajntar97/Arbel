<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
  protected $fillable = ['memoryText', 'user_id'];
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
