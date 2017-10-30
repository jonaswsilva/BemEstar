<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecords extends Model
{
    protected $fillable = [
      'date',
      'hour',
      'description',
      'number_of_sessions',
      'actual_session',
      'patient_id',
      'professional_id',
    ];

    public function patient(){
      return $this->belongsTo('App\Patient', 'patient_id', 'id');
    }

    public function professional(){
      return $this->belongsTo('App\Professional', 'professional_id', 'id');
    }

    public function session(){
      return $this->hasOne('App\Session');
    }

}
