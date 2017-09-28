<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedures extends Model
{

  public $fillable = [
    'patient_id',
    'professional_id',

  ];


  public function patient(){
    return $this->belongsTo('App\Patient', 'patient_id', 'id');
  }

  public function professional(){
    return $this->belongsTo('App\Professional', 'professional_id', 'id');
  }

  public function type_procedures(){
    return $this->belongsTo('App\TypeProcedures', 'type_procedures_id', 'id');
  }
}
