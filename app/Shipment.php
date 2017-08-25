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
  public function getEditorsName() {
    return User::where('id', $this->edited_by)->first();
  }

}
