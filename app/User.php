<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
{
    if('admin' == $this->access){
      return true;
    } else {
      return false;
    }
}
//Sprawdza czy uprawnienia zalogowanego użytkownika dla danego działu(kolumny)
//są wystarczjące. Sprawdza jakie uprawnienia (od 0 do 4) mają wpisane
//użytkownicy w kolumnie tabeli odpowiadającej za prawa dostępu
public function servicesCheck($grant,$column)
{
if($grant <= $this->$column){
  return true;
} else {
  return false;
} // check access_services column in Userstable
}

public function service() {
return $this->belongsTo(Service::class);
}

}
