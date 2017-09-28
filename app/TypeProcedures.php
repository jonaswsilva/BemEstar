<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProcedures extends Model
{
  public $fillable = [
    'name',
  ];

  public function procedures(){
    return $this->hasOne('App\Procedures', 'type_procedures_id', 'id');
  }
}
