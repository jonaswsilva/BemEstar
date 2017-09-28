<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postural extends Model
{


  public function medicalappointment()
    {
        return $this->belongsTo('App\MedicalAppointment');
    }

}
