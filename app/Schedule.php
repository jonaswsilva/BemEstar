<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon;
class Schedule extends Model
{
  public $fillable = [
    'patient_id',
    'professional_id',
    'date',
    'hour',
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
}
