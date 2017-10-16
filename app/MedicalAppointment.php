<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class MedicalAppointment extends Model
{
  protected $date_hour = ['date_hour'];

  public $fillable = [

    'date_hour',
    'patient_id',
    'professional_id',
    'description',

  ];

  public function getDateMuAttribute(){
    return Carbon::parse($this->attributes['date']);
  }

  public function postural(){
        return $this->hasOne('App\Postural');
    }

    public function neurological(){
          return $this->hasOne('App\Neurological');
      }

  public function patient(){
    return $this->belongsTo('App\Patient', 'patient_id', 'id');
  }

  public function professional(){
    return $this->belongsTo('App\Professional', 'professional_id', 'id');
  }
}
