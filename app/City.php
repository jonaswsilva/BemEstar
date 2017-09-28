<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $table = 'cities';

  public $fillable = [
    'name',
    'state_id',
  ];

  public function address(){
    return $this->hasMany('App\Address', 'city_id', 'id');
  }

  public function state(){
    return $this->belongsTo('App\State', 'state_id', 'id');
  }
}
