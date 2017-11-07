<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MedicalAppointmentRequest;
use App\Professional;
use App\Patient;
use App\Postural;
use App\MedicalAppointment;
use View;
use DB;
use Carbon;
use PDF;
use Auth;

class MedicalAppointmentController extends Controller
{

  public function index(){

    $medicalappointments = MedicalAppointment::where('professional_id', '=', Auth::user()->id)->get();;
    return view('medicalappointments.index')
    ->with(compact('medicalappointments'));
  }

  public function create()
  {
    $patients = DB::table('patients')
                  ->join('person', 'patients.person_id', '=', 'person.id')
                  ->pluck('person.name','patients.id');
    return view('medicalappointments.create')
                ->with(['button'=>'Salvar'])
                ->with(compact('patients'));
  }

  public function store(MedicalAppointmentRequest $request){
    $medicalappointment = new MedicalAppointment();

    $medicalappointment->patient_id      = $request->input('patient_id');
    $medicalappointment->professional_id = $request->input('professional_id');
    $medicalappointment->date            = $request->input('date');
    $medicalappointment->hour            = $request->input('hour');
    $medicalappointment->description     = $request->input('description');
    $medicalappointment->save();

    flash('Consulta criada com sucesso!')->success();
    return $this->index();
  }

  public function show($id){
    $medicalappointment = MedicalAppointment::find($id);
    $postural = DB::table('posturals')->where('medicalappointment_id', $id)->first();
    return View::make('medicalappointments.show',compact('medicalappointment','postural'));
  }

  public function pdf($id){
    $medicalappointment = MedicalAppointment::find($id);
    $postural = DB::table('posturals')->where('medicalappointment_id', $id)->first();
    return $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                          ->loadView('medicalappointments.printpdf',compact('medicalappointment','postural'))->stream();
  }

  public function edit($id)
  {
    $medicalappointment = MedicalAppointment::findOrFail($id);
    $patients = DB::table('patients')
                        ->join('person', 'patients.person_id', '=', 'person.id')
                         ->pluck('person.name','patients.id');
    return view('medicalappointments.edit')
                ->with(compact('medicalappointment','patients'))
                  ->with(['button' => 'Atualizar']);
  }

  public function update(MedicalAppointmentRequest $request, $id)
  {
    $medicalappointment = MedicalAppointment::findOrFail($id);
    $medicalappointment->patient_id      = $request->input('patient_id');
    $medicalappointment->professional_id = $request->input('professional_id');
    $medicalappointment->date            = $request->input('date');
    $medicalappointment->hour            = $request->input('hour');
    $medicalappointment->description     = $request->input('description');
    $medicalappointment->push();

    flash('Consulta atualizada com sucesso!')->info()->important();
    return $this->edit($id);

  }

  public function destroy($id)
  {
    $medicalappointment = MedicalAppointment::find($id);
    if ($medicalappointment != null) {
      $medicalappointment->delete();
      flash('Consulta excluido com sucesso!')->success();
      return $this->index();
    }
    flash('Código não encontrado!')->error();
    return $this->index();
  }
}
