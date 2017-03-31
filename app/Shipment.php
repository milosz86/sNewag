<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
  public function part() {
  return $this->belongsTo(Part::class);
  }
  public function user() {
  return $this->belongsTo(User::class);
  }


}
