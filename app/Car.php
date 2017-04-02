<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public function service() {
  return $this->belongsTo(Service::class);
  }
  public function user() {
  return $this->belongsTo(User::class);
  }
}
