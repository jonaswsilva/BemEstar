<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{

  protected $fillable = [
    'especialitie_id',
    'crm',
    'person_id',
    'address_id',
    'user_id',
  ];

  public function person(){
    return $this->belongsTo('App\Person', 'person_id', 'id');
  }

  public function user(){
    return $this->belongsTo('App\User', 'user_id', 'id');
  }

  public function schedule(){
    return $this->hasOne('App\Schedule', 'professional_id', 'id');
  }

  public function procedures(){
    return $this->hasOne('App\Procedures', 'professional_id', 'id');
  }

  public function medicalrecords(){
    return $this->hasOne('App\MedicalRecords', 'professional_id', 'id');
  }

  public function medicalappointment(){
    return $this->hasOne('App\MedicalAppointment', 'professional_id', 'id');
  }

  public function address(){
    return $this->belongsTo('App\Address', 'address_id', 'id');
  }

  public function especialitie(){
    return $this->belongsTo('App\Especialitie', 'especialitie_id', 'id');
  }

  public function getBirthDateMuAttribute(){
    return Carbon::parse($this->attributes['birth_date']);
  }


}
