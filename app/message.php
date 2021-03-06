<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class message extends Model
{
  public function getCreatedAtAttribute($date)
  {
    return Carbon::createFromFormat('Y-m-d H:i:s',$date)->diffForHumans();
  }
  public function receiver()
  {
    return $this->belongsToMany('App\User','book_marks','message_id','user_id');
  }
}
