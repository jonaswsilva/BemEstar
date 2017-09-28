<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'role',
  ];

  /**
  * The attributes excluded from the model's JSON form.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function professional(){
    return $this->hasOne('App\Professional', 'user_id', 'id');
  }

}
