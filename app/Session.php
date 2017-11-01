<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon;

class Session extends Model
{
  public $fillable = [
    'medicalrecord_id',
    'date',
  ];

  public function getDateMuAttribute(){
    return Carbon::parse($this->attributes['date']);
  }

  public function medicalrecord()
    {
        return $this->belongsTo('App\MedicalRecords');
    }

}
