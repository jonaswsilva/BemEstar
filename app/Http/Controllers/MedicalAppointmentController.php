<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Professional;
use App\Patient;
use App\Postural;
use App\MedicalAppointment;
use View;
use DB;
use Carbon;
use PDF;

class MedicalAppointmentController extends Controller
{



  public function index(){

    $medicalappointments = MedicalAppointment::all();
    return view('medicalappointments.index')
    ->with(compact('medicalappointments'));

  }


  public function avaliations($id){
    $medicalappointment = MedicalAppointment::findOrFail($id);
    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','professionals.id');
    $patients = DB::table('patients')
    ->join('person', 'patients.person_id', '=', 'person.id')
    ->pluck('person.name','patients.id');
    //dd($medicalappointment);
    return view('medicalappointments.avaliations')
    ->with(compact('medicalappointment'));
  }


  public function create()
  {
    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','professionals.id');
    return view('medicalappointments.create')
    ->with(['button'=>'Salvar'])
    ->with(compact('professionals'));
  }


  public function store(Request $request)
  {
    $medicalappointment = new MedicalAppointment();

    $medicalappointment->patient_id      = $request->input('patient_id');
    $medicalappointment->professional_id = $request->input('professional_id');
    $medicalappointment->date            = $request->input('date');
    $medicalappointment->hour            = $request->input('hour');
    $medicalappointment->description     = $request->input('description');
    $medicalappointment->save();

    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','person.id');
    $medicalappointments = MedicalAppointment::all();
    return view('medicalappointments.index')
    ->with(['button'=>'Salvar'])
    ->with(compact('professionals','medicalappointments'));
  }


  public function show($id)
  {

    $medicalappointment = MedicalAppointment::find($id);
    $postural = DB::table('posturals')->where('medicalappointment_id', $id)->first();
    return View::make('medicalappointments.show',compact('medicalappointment','postural'));
  }

  public function pdf($id){

    $medicalappointment = MedicalAppointment::find($id);
    $postural = DB::table('posturals')->where('medicalappointment_id', $id)->first();


    return $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                          ->loadView('medicalappointments.printpdf',compact('medicalappointment','postural'))->stream();
    //return $pdf->download('avaliacao_postural.pdf');

  }

  public function formpostural(){
    return view('postural.create');
  }

  public function formneurological(){
    return view('medicalappointments._formneurological');
  }


  public function edit($id)
  {
    $medicalappointment = MedicalAppointment::findOrFail($id);
    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','professionals.id');
    $patients = DB::table('patients')
    ->join('person', 'patients.person_id', '=', 'person.id')
    ->pluck('person.name','patients.id');
    //dd($medicalappointment);
    return view('medicalappointments.edit')
    ->with(compact('medicalappointment'))
    ->with(['button' => 'Atualizar']);
  }


  public function update(Request $request, $id)
  {
    $medicalappointment = MedicalAppointment::findOrFail($id);
    $medicalappointment->patient_id      = $request->input('patient_id');
    $medicalappointment->professional_id = $request->input('professional_id');
    $medicalappointment->date            = $request->input('date');
    $medicalappointment->hour            = $request->input('hour');
    $medicalappointment->description     = $request->input('description');
    $medicalappointment->push();

    return $this->index();

  }

  public function destroy($id)
  {
    $medicalappointment = MedicalAppointment::find($id);
    dd($medicalappointment);
    if ($medicalappointment != null) {
      dd($medicalappointment);
      $medicalappointment->delete();
      $medicalappointments = MedicalAppointment::orderBy('id', 'desc')->get();
      Session::flash('message', 'Consulta excluida com sucesso!');
      return view('medicalappointments.index')
                        ->with(compact('medicalappointments'))
                          ->with(['alert' => 'success']);
    }
    Session::flash('message', 'Código não encontrado!');
    return view('medicalappointments.index')
                ->with(['alert'=>'alert']);
  }
}
