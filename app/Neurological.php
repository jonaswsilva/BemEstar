<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neurological extends Model
{

  public function medicalappointment()
    {
        return $this->belongsTo('App\MedicalAppointment');
    }

}
