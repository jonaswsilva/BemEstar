<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PatientRequest;
use Illuminate\HttpResponse;
use App\Person;
use App\Patient;
use App\Professional;
use App\State;
use App\Address;
use App\City;
use Illuminate\Support\Facades\DB;
use View;
use Redirect;
use Session;


class PatientController extends Controller
{

    public function index(){
      $patients = Patient::all();
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      return View::make('patients.index')
          ->with(compact('patients','professionals'));
    }

    public function create()
    {
      $states = State::pluck('name','id');
      // dd($states);
      // $id = $states->id->first();
      // $cities = City::whereStateId($id)->get();
      return View::make('patients.create')
          ->with(['route' => 'paciente/salvar', 'method' => 'post', 'button' => 'Cadastrar'])
          ->with(compact('states'));
    }


    public function store(PatientRequest $request)
    {
      $person = new Person();
      $person->name = $request->input('name');
      $person->lastname = $request->input('lastname');
      $person->rg_mu = $request->input('rg');
      $person->cpf_mu = $request->input('cpf');
      $person->sex = $request->input('sex');
      $person->phone_mu = $request->input('phone');
      $person->landline_mu = $request->input('landline');
      $person->email = $request->input('email');
      //dd($person);
      $person->save();
      $person_id = $person->id;

      $address = new Address();
      $address->cep_mu = $request->input('cep');
      $address->street = $request->input('street');
      $address->number = $request->input('number');
      $address->neighborhood = $request->input('neighborhood');
      $address->city_id = $request->input('city_id');
      $address->save();
      $address_id = $address->id;

      $city = new City();
      $city->state_id = $request->input('state_id');
      $city->save();



      $patient = new Patient();
      $patient->person_id = $person_id;
      $patient->address_id = $address_id;

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $patient->avatar = $filename;
      }else{
        $patient->avatar = "default.jpg";
      }

      $patient->father = $request->input('father');
      $patient->mother = $request->input('mother');
      $patient->birth_date = $request->input('birth_date');
      //$patient->save();

      $patient->person()->associate($person);
      $patient->save();

      Session::flash('message', 'Paciente cadastrado com sucesso!');
      $patients = Patient::orderBy('id', 'desc')->paginate(10);
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
          return view('patients.index')
                      ->with(compact('patients','professionals'))
                      ->with(['alert' => 'success']);
    }


    public function show($id)
    {
      $patient = Patient::find($id);
      return View::make('patients.show',compact('patient'));
    }


    public function edit($id)
    {
      $patient = Patient::with('address.city.state')->findOrFail($id);
      $states = State::pluck('name','id');
      //dd($patient);
      return view('patients.edit')
                  ->with(compact('patient','states'))
                  ->with(['button' => 'Atualizar']);
    }


    public function update(PatientRequest $request, $id){

      $patient = Patient::findOrFail($id);
      $patient->person->name = $request->input('name');
      $patient->person->lastname = $request->input('lastname');
      $patient->person->rg_mu = $request->input('rg');
      $patient->person->cpf_mu = $request->input('cpf');
      $patient->person->sex = $request->input('sex');
      $patient->person->phone_mu = $request->input('phone');
      $patient->person->landline_mu = $request->input('landline');
      $patient->person->email = $request->input('email');

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $patient->avatar = $filename;
      }else{
        $patient->avatar = "default.jpg";
      }

      $patient->father = $request->input('father');
      $patient->mother = $request->input('mother');
      $patient->birth_date = $request->input('birth_date');
      $patient->address->cep_mu = $request->input('cep');
      $patient->address->street = $request->input('street');
      $patient->address->number = $request->input('number');
      $patient->address->neighborhood = $request->input('neighborhood');
      $patient->address->city_id = $request->input('city_id');
      $patient->address->city->state_id = $request->input('state_id');

      $patient->push();

      $states = State::pluck('name','id');
      $cities = City::pluck('name','id');
      Session::flash('message', 'Paciente Atualizado com sucesso!');
      return View::make('patients.edit', ['patient'=> $patient,
      'route' => '/paciente/atualizar/', 'method' => 'post', 'button' => 'Atualizar'],compact('states','cities'));
    }


    public function destroy($id)
    {

      $patient = Patient::find($id);
      if ($patient != null) {
        dd($patient);
        $patient->delete();
        flash('Paciente excluido com sucesso!')->success();
        return $this->index();
      }
      flash('Código não encontrado!')->error();
      return $this->index();
    }

    public function cities($id)
    {
       //$id = 1;

        // Return of cities for a selected state
        return City::whereStateId($id)->get();

    }
}
