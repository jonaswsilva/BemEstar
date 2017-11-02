<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MedicalRecordRequest;
use App\MedicalRecords;
use DB;
use View;
use App\Patient;
use App\Session;
use Redirect;

class MedicalRecordsController extends Controller{

    public function index(){
        $medicalrecords = MedicalRecords::all();
        $professionals = DB::table('professionals')
        ->join('person', 'professionals.person_id', '=', 'person.id')
        ->pluck('person.name','person.id');
        return view('medicalrecords.index')
                    ->with(compact('medicalrecords','professionals','performed'));
    }


    public function create(){
      $patients = DB::table('patients')
                      ->join('person', 'patients.person_id', '=', 'person.id')
                      ->pluck('person.name','patients.id');

      return View::make('medicalrecords.create')
                      ->with(compact('professionals','patients'))
                      ->with(['button'=>'Salvar']);
    }

    public function findSession(){
      $patients = DB::table('patients')
                    ->join('person', 'patients.person_id', '=', 'person.id')
                    ->pluck('person.name','patients.id');
      return view('medicalrecords.findsession')->with(compact('patients'));
    }

    public function session(Request $request){
      $id = $request->input('patient_id');
      $medicalrecord = MedicalRecords::where('patient_id', $id)->first();
      if($medicalrecord == null){
          flash('Paciente ainda não marcou sessões!')->error();
          return $this->findSession();
      }else{
        return view('medicalrecords.session')->with(compact('medicalrecord'));
      }
    }

    public function storeSession(Request $request){
      $session = new Session();
      $session->medicalrecord_id = $request->input('medicalrecord_id');
      $id = $request->input('medicalrecord_id');
      $session->number_of_session = $request->input('number_of_session');
      $session->hour = $request->input('hour');
      $session->date = $request->input('date');
      $session->description = $request->input('description');
      $session->save();

      $medicalrecord = MedicalRecords::find($id);
      $performed = DB::table('sessions')->where('medicalrecord_id', '=', $id)->count();
      $medicalrecord->actual_session = $performed;
      $medicalrecord->push();

      flash('Sessão salva com sucesso!')->success();
      return $this->show($id);
    }

    public function store(MedicalRecordRequest $request){
        $medicalrecord = new MedicalRecords();
        $medicalrecord->patient_id         = $request->input('patient_id');
        $medicalrecord->professional_id    = $request->input('professional_id');
        $medicalrecord->date               = $request->input('date');
        $medicalrecord->number_of_sessions = $request->input('number_of_sessions');
        $medicalrecord->actual_session     = 0;
        $medicalrecord->description        = $request->input('description');
        $medicalrecord->save();

        flash('Sessão criada com sucesso!')->success();
        return $this->index();
    }


    public function show($id){
        $medicalrecord = MedicalRecords::findOrFail($id);
        $sessions = DB::table('sessions')->where('medicalrecord_id', '=', $id)->get();
        //dd($sessions);
        return view('medicalrecords.show')->with(compact('medicalrecord','sessions'));
    }

    public function pdf($id){
      $medicalrecord = MedicalRecords::find($id);
      return $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                            ->loadView('medicalrecords.printpdf',compact('medicalrecord'))->stream();
    }

    public function edit($id){
      $medicalrecord = MedicalRecords::findOrFail($id);
      $patients = DB::table('patients')
                ->join('person', 'patients.person_id', '=', 'person.id')
                ->pluck('person.name','patients.id');
      return view('medicalrecords.edit')
                  ->with(compact('medicalrecord','patients'))
                  ->with(['button'=>'Atualizar']);
    }


    public function update(Request $request, $id){
      $medicalrecord = MedicalRecords::findOrFail($id);
      $medicalrecord->patient_id = $request->input('patient_id');
      $medicalrecord->professional_id = $request->input('professional_id');
      $medicalrecord->date = $request->input('date');
      $medicalrecord->number_of_sessions = $request->input('number_of_sessions');
      $medicalrecord->description = $request->input('description');
      $medicalrecord->actual_session = 1;
      $medicalrecord->push();

      flash('Sessão atualizada com sucesso!')->info();
      return $this->edit($id);
    }


    public function destroy($id){
      $medicalrecord = MedicalRecords::find($id);
      if ($medicalrecord != null) {
        $medicalrecord->delete();
        $medicalrecords = MedicalRecords::all();
        flash('Sessão excluída com sucesso!')->info();
        return $this->index();
      }
      flash('Código não encontrado!')->info();
      return $this->index();
    }

    public function destroySession($sessionid, $medicalid){
      $session = Session::find($sessionid);
      if ($session != null) {
        $session->delete();
        MedicalRecords::where('id',$medicalid)->decrement('actual_session',1);
        $sessions = Session::all();
        flash('Sessão excluída com sucesso!')->info();
        return $this->show($medicalid);
      }
      flash('Código da sessão não encontrado!')->info();
      return $this->index();
    }

    public function autoComplete(Request $request){

      $term = $request->input('term');

      $results = array();

      $queries = DB::table('person')
      ->join('patients', 'person.id', '=', 'patients.person_id')
      ->where('name', 'LIKE', '%'.$term.'%')
      ->orWhere('lastname', 'LIKE', '%'.$term.'%')
      ->take(5)->get();

      foreach ($queries as $query)
      {
        $results[] = [ 'id' => $query->id, 'value' => $query->name.' '.$query->lastname ];

      }
      return Response::json($results);
     }
}
