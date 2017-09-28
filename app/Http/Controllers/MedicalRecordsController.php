<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MedicalRecords;
use DB;
use View;

class MedicalRecordsController extends Controller
{

    public function index()
    {
        $medicalrecords = MedicalRecords::orderBy('id', 'desc')->paginate(5);
        $professionals = DB::table('professionals')
        ->join('person', 'professionals.person_id', '=', 'person.id')
        ->pluck('person.name','person.id');
        return view('medicalrecords.index')
                    ->with(compact('medicalrecords','professionals'));
    }


    public function create()
    {
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      return View::make('medicalrecords.create')
      ->with(compact('professionals'))
      ->with(['button'=>'Salvar']);
    }


    public function store(Request $request)
    {
        $medicalrecord = new MedicalRecords();
        $medicalrecord->patient_id         = $request->input('patient_id');
        $medicalrecord->professional_id    = $request->input('professional_id');
        $medicalrecord->number_of_sessions = $request->input('number_of_sessions');
        $medicalrecord->actual_session     = 1;
        $medicalrecord->date               = $request->input('date');
        $medicalrecord->description        = $request->input('description');
        $medicalrecord->save();

        $medicalrecords = MedicalRecords::orderBy('id', 'desc')->paginate(5);
        $professionals = DB::table('professionals')
        ->join('person', 'professionals.person_id', '=', 'person.id')
        ->pluck('person.name','professionals.id');
        return view('medicalrecords.index')
                    ->with(compact('medicalrecords','professionals'));

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $medicalrecord = MedicalRecords::findOrFail($id);
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      $patients = DB::table('patients')
      ->join('person', 'patients.person_id', '=', 'person.id')
      ->pluck('person.name','patients.id');
      return view('medicalrecords.edit')
                  ->with(compact('medicalrecord','professionals','patients'))
                  ->with(['button'=>'Atualizar']);
    }


    public function update(Request $request, $id)
    {
      $medicalrecord = MedicalRecords::findOrFail($id);
      $medicalrecord->patient_id = $request->input('patient_id');
      $medicalrecord->professional_id = $request->input('professional_id');
      $medicalrecord->date = $request->input('date');
      $medicalrecord->number_of_sessions = $request->input('number_of_sessions');
      $medicalrecord->description = $request->input('description');
      $medicalrecord->actual_session = 1;
      $medicalrecord->push();

      $medicalrecords = MedicalRecords::orderBy('id', 'desc')->paginate(5);
      return view('medicalrecords.index')
                   ->with(compact('medicalrecords'));
    }

    
    public function destroy($id)
    {
      $medicalrecord = MedicalRecords::find($id);
      if ($medicalrecord != null) {
        $medicalrecord->delete();
        $medicalrecords = MedicalRecords::orderBy('id', 'desc')->get();
        Session::flash('message', 'Sessão excluida com sucesso!');
        return View::make('medicalrecords.index',['medicalrecords' => $medicalrecords, 'alert'=>'danger']);
      }
      Session::flash('message', 'Código não encontrado!');
      return View::make('medicalrecords.index',['alert'=>'alert']);
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
