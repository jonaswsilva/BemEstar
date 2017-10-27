<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Procedures;
use App\TypeProcedures;
use DB;
use View;

class ProceduresController extends Controller
{

    public function index()
    {
        $procedures = Procedures::orderBy('id', 'desc')->paginate(5);
        //dd($procedures);
        return view('procedures.index')
                    ->with(compact('procedures'));
    }


    public function create()
    {
      $typeprocedures = TypeProcedures::pluck('name','id');
      $typeprocedurestable = TypeProcedures::all();
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      return View::make('procedures.create')
                      ->with(compact('professionals','typeprocedures','typeprocedurestable'))
                        ->with(['button'=>'Salvar']);
    }


    public function store(Request $request)
    {
        $procedure = new Procedures();
        $procedure->patient_id = $request->input('patient_id');
        $procedure->professional_id = $request->input('professional_id');
        $procedure->date = $request->input('date');
        $procedure->price = $request->input('price');
        $procedure->type_payment = $request->input('type_payment');
        $procedure->plots = $request->input('plots');
        $procedure->observation = $request->input('observation');
        $procedure->type_procedures_id = $request->input('type_procedures_id');
        $procedure->save();

        flash('Procedimento criado com sucesso!')->success();
        return $this->index();

    }


    public function show($id)
    {
        $procedure = Procedures::findOrFail($id);

        return view('procedures.show')
                    ->with(compact('procedure'));
    }


    public function edit($id)
    {
      $procedure = Procedures::findOrFail($id);
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      $patients = DB::table('patients')
      ->join('person', 'patients.person_id', '=', 'person.id')
      ->pluck('person.name','patients.id');
      $typeprocedures = TypeProcedures::pluck('name','id');
      $typeprocedurestable = TypeProcedures::all();
      return view('procedures.edit')
                  ->with(compact('procedure','professionals','patients','typeprocedures','typeprocedurestable'))
                  ->with(['button'=>'Atualizar']);
    }


    public function update(Request $request, $id)
    {
      $procedure = Procedures::findOrFail($id);
      $procedure->patient_id = $request->input('patient_id');
      $procedure->professional_id = $request->input('professional_id');
      $procedure->date = $request->input('date');
      $procedure->plots = $request->input('plots');
      $procedure->type_payment = $request->input('type_payment');
      $procedure->type_procedures_id = $request->input('type_procedures_id');
      $procedure->observation = $request->input('observation');
      $procedure->price = $request->input('price');
      $procedure->push();

      flash('Procedimento atualizado com sucesso!')->info();
      return $this->edit($id);
    }


    public function destroy($id)
    {
      $procedure = Procedures::find($id);
      if ($procedure != null) {
        $procedure->delete();
        flash('Procedimento excluido com sucesso!')->success();
        return $this->index();
      }
      flash('Código não encontrado!')->error();
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
        $results[] = [ 'id' => $query->id, 'value' => $query->name.' '.$query->lastname.' '.$query->cpf ];

      }
      return Response::json($results);
     }


}
