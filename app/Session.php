<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  public $fillable = [
    'medicalrecord_id',
  ];

  public function medicalrecord()
    {
        return $this->belongsTo('App\MedicalRecords');
    }

}
