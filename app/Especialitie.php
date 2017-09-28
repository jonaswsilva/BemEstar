<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialitie extends Model
{

  public $fillable = [
    'name',
  ];

  public function professional(){
    return $this->hasMany('App\Professional', 'especialitie_id', 'id');
  }
}
