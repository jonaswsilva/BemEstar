<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

  protected $table = 'states';

  public $fillable = [
    'name',
  ];

  public function city(){
    return $this->hasMany('App\City', 'state_id', 'id');
  }

  public function address()
    {
        return $this->hasManyThrough('App\Address', 'App\City');
    }

}
