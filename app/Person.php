<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

    public $fillable = [
    	'name',
      'lastname',
    	'rg',
    	'cpf',
    	'sex',
      'phone',
      'landline',
    ];

    public function setRgMuAttribute($value) {
        $this->attributes['rg'] = preg_replace("/[^0-9]/", "", $value);;
    }

    public function setCpfMuAttribute($value) {
        $this->attributes['cpf'] = preg_replace("/[^0-9]/", "", $value);;
    }

    public function setPhoneMuAttribute($value) {
        $this->attributes['phone'] = preg_replace("/[^0-9]/", "", $value);;
    }

    public function setLandlineMuAttribute($value) {
        $this->attributes['landline'] = preg_replace("/[^0-9]/", "", $value);;
    }

    public function patient(){
      return $this->hasOne('App\Patient', 'person_id', 'id');
    }

    public function professional(){
      return $this->hasOne('App\professional', 'person_id', 'id');
    }
}
