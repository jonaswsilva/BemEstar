<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $table = 'addresses';

  public $fillable = [
    'cep',
    'street',
    'number',
    'neighborhood',
    'city_id',
  ];

  public function setCepMuAttribute($value) {
      $this->attributes['cep'] = preg_replace("/[^0-9]/", "", $value);;
  }

  public function patient(){
    return $this->hasMany('App\Patient', 'address_id', 'id');
  }

  public function professional(){
    return $this->hasMany('App\Professional', 'address_id', 'id');
  }

  public function city(){
    return $this->belongsTo('App\City', 'city_id', 'id');
  }
}
