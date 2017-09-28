<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Patient extends Model
{

    protected $table = 'patients';

    protected $fillable = [
    	'father',
    	'mother',
    	'birth_date',
    	'spouce',
    	'person_id',
      'address_id',
    ];

    public function getBirthDateMuAttribute(){
      return Carbon::parse($this->attributes['birth_date']);
    }

    public function schedule(){
      return $this->hasOne('App\Schedule', 'patient_id', 'id');
    }

    public function procedures(){
      return $this->hasOne('App\Procedures', 'patient_id', 'id');
    }

    public function medicalrecords(){
      return $this->hasOne('App\MedicalRecords', 'patient_id', 'id');
    }

    public function medicalappointment(){
      return $this->hasOne('App\MedidicalAppointment', 'patient_id', 'id');
    }

    public function person(){
      return $this->belongsTo('App\Person', 'person_id', 'id');
    }

    public function address(){
      return $this->belongsTo('App\Address', 'address_id', 'id');
    }


}
