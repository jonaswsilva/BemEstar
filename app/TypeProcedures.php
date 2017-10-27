<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProcedures extends Model
{
  public $fillable = [
    'name',

  ];

  public function procedures(){
    return $this->hasMany('App\Procedures', 'type_procedures_id');
  }
}
