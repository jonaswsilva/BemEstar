<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Procedures extends Model
{

  public $fillable = [
    'patient_id',
    'professional_id',
    'type_procedures_id'
  ];

  public function getDateMuAttribute(){
    return Carbon::parse($this->attributes['date']);
  }

  public function patient(){
    return $this->belongsTo('App\Patient', 'patient_id', 'id');
  }

  public function professional(){
    return $this->belongsTo('App\Professional', 'professional_id', 'id');
  }

  public function type_procedures(){
    return $this->belongsTo('App\TypeProcedures', 'type_procedures_id');
  }
}
