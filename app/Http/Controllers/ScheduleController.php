<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ScheduleRequest;
use App\Http\Requests;
use App\Patient;
use App\Person;
use App\Professional;
use View;
use DB;
use Response;
use Redirect;
use Session;
use App\Schedule;
class ScheduleController extends Controller
{
  public function index()
  {
    return view('schedules.index');
  }
  public function create()
  {
    // $professional = DB::table('professionals')
    // ->join('person', 'professionals.person_id', '=', 'person.id')
    // ->pluck('person.name','professionals.id');
    // dd($professional);
    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','professionals.id');
    //dd($professional);
    return View::make('schedules.create')
                    ->with(compact('professionals'))
                    ->with(['button'=>'Salvar']);
  }

  public function store(ScheduleRequest $request)
  {
    $date = $request->input('date');
    //dd($date);
    $hour = $request->input('hour');
    $professional = $request->input('professional_id');
    $markedschedule = DB::table('schedules')
                      ->where('date', '=' ,$date)
                      ->where('hour', '=' ,$hour)
                      ->where('professional_id', '=', $professional)
                      ->first();
    if (is_null($markedschedule)){
      $schedule = new Schedule;
      $schedule->patient_id = $request->input('patient_id');
      $schedule->professional_id = $request->input('professional_id');
      $schedule->date = $request->input('date');
      $schedule->hour = $request->input('hour');
      //dd($schedule);
      $schedule->save();
      flash('Agendamento realizado com sucesso!')->success();
      return $this->all();
    }else{
      flash('Já existe uma consulta nessa date e horário!')->error();
      return view('schedules/all')->withInput();
      //dd($schedule);
    }
    //$schedule->save();
  }

public function show($id)
  {
    $schedule = Schedule::findOrFail($id);
    return view('schedules.show')
                ->with(compact('schedule'));
  }

public function edit($id)
  {
    $schedule = Schedule::findOrFail($id);
    $professionals = DB::table('professionals')
    ->join('person', 'professionals.person_id', '=', 'person.id')
    ->pluck('person.name','professionals.id');
    $patients = DB::table('patients')
    ->join('person', 'patients.person_id', '=', 'person.id')
    ->pluck('person.name','patients.id');
    return view('schedules.edit')
                ->with(compact('schedule','professionals','patients'))
                ->with(['button'=>'Atualizar']);
  }

public function update(Request $request, $id)
  {
      $schedule = Schedule::findOrFail($id);
      $schedule->patient_id = $request->input('patient_id');
      $schedule->professional_id = $request->input('professional_id');
      $schedule->date = $request->input('date');
      $schedule->hour = $request->input('hour');
      $schedule->push();

      return $this->edit($id);
  }

public function destroy($id){
    $schedule = Schedule::find($id);
    if ($schedule != null) {
      $schedule->delete();
      flash('Agendamento excluido com sucesso!')->success();
      return $this->all();
    }
    flash('Código não encontrado!')->error();
    return $this->all();
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
      $results[] = [ 'id' => $query->id, 'value' => $query->name.' '.$query->lastname.' '.$query->cpf];
    }
    return Response::json($results);
   }

public function all(){
     $schedules =Schedule::orderBy('date','hour')->get();
     $professionals = DB::table('professionals')
     ->join('person', 'professionals.person_id', '=', 'person.id')
     ->pluck('person.name','professionals.id');
     return view('schedules.all')
                  ->with(compact('schedules','professionals'))
                  ->with(['button'=>'Salvar']);
   }
}
