<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProfessionalRequest;
use App\Professional;
use App\State;
use App\City;
use App\Person;
use App\Address;
use App\User;
use App\Especialitie;
use Session;
use View;
use Hash;
use Validator;

class ProfessionalController extends Controller
{

    public function index()
    {
        $professionals = Professional::orderBy('id', 'desc')->get();
        return View::make('professionals.index')
                    ->with('professionals',$professionals);
    }


    public function create()
    {
      $states = State::pluck('name','id');
      $especialities = Especialitie::pluck('name','id');
        return View::make('professionals.create')
        ->with(['route' => 'profissional/salvar', 'method' => 'post', 'button' => 'Cadastrar'])
        ->with(compact('states','especialities'));
    }


    public function store(ProfessionalRequest $request)
    {
      $person = new Person();
      $professional = new Professional();
      $address = new Address();
      $city = new City();
      $user = new User();

      $person->name = $request->input('name');
      $person->lastname = $request->input('lastname');
      $person->rg_mu = $request->input('rg');
      $person->cpf_mu = $request->input('cpf');
      $person->sex = $request->input('sex');
      $person->phone_mu = $request->input('phone');
      $person->landline_mu = $request->input('landline');
      $person->email = $request->input('email');
      $person->save();
      $person_id = $person->id;


      $address->cep_mu = $request->input('cep');
      $address->street = $request->input('street');
      $address->number = $request->input('number');
      $address->neighborhood = $request->input('neighborhood');
      $address->city_id = $request->input('city_id');
      $address->save();
      $address_id = $address->id;

      $city->state_id = $request->input('state_id');

      // $validator = Validator::make($request->all(), [
      //       'password' => 'required|min:6|confirmed',
      //   ]);
      //
      // if($validator->fails()){
      //   $states = State::pluck('name','id');
      //   $especialities = Especialitie::pluck('name','id');
      //   return view('professionals.create')
      //   ->with(['route' => 'profissional/salvar', 'method' => 'post', 'button' => 'Cadastrar'])
      //   ->with(compact('states','especialities'))
      //                   ->withErrors($validator)
      //                   ->withInput();
      // }


      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = Hash::make($request->input('password'));
      $user->role = $request->input('role');

      $user->save();
      $user_id = $user->id;


      $professional->crm = $request->input('crm');
      $professional->user_id = $user_id;
      $professional->person_id = $person_id;
      $professional->address_id = $address_id;
      $professional->especialitie_id = $request->input('especialitie_id');

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $professional->avatar = $filename;
      }else{
        $professional->avatar = "default.jpg";
      }

      $professional->person()->associate($person);
      $professional->save();

      Session::flash('message', 'Professional cadastrado com sucesso!');
      $professionals = Professional::orderBy('id', 'desc')->get();
      return View::make('professionals.index', ['professionals' => $professionals, 'alert' => 'success']);

    }


    public function show($id)
    {
      $professional = Professional::find($id);
      return View::make('professionals.show',compact('professional'));
    }


    public function edit($id)
    {
      $professional = Professional::with('address.city.state','user')->findOrFail($id);
      $states = State::pluck('name','id');
      //$users = User::all();

      $especialities = Especialitie::pluck('name','id');
      return View::make('professionals.edit', compact('professional','states','especialities','user'),['route' => '/profissional/atualizar/', 'method' => 'post', 'button' => 'Atualizar']);
    }


    public function update(Request $request, $id)
    {

      $professional = Professional::findOrFail($id);
      $professional->person->name = $request->input('name');
      $professional->person->lastname = $request->input('lastname');
      $professional->person->rg_mu = $request->input('rg');
      $professional->person->cpf_mu = $request->input('cpf');
      $professional->person->sex = $request->input('sex');
      $professional->person->phone_mu = $request->input('phone');
      $professional->person->landline_mu = $request->input('landline');
      $professional->person->email = $request->input('email');

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $professional->avatar = $filename;
      }else{
        $professional->avatar = "default.jpg";
      }

      $professional->address->cep_mu = $request->input('cep');
      $professional->address->street = $request->input('street');
      $professional->address->number = $request->input('number');
      $professional->address->neighborhood = $request->input('neighborhood');
      $professional->address->city_id = $request->input('city_id');
      $professional->address->city->state_id = $request->input('state_id');
      $professional->especialitie_id = $request->input('especialitie_id');
      $professional->crm = $request->input('crm');
      $professional->user->role = $request->input('role');
      $professional->user->password = $request->input('password');

      $professional->push();

      $states = State::pluck('name','id');
      $cities = City::pluck('name','id');
      $especialities = Especialitie::pluck('name','id');
      Session::flash('message', 'Profissional Atualizado com sucesso!');
      return View::make('professionals.edit', ['professional'=> $professional,
      'route' => '/profissional/atualizar/', 'method' => 'post', 'button' => 'Atualizar'],compact('states','cities','especialities'));
    }


    public function destroy($id)
    {
      $professional = Professional::find($id);
      if ($professional != null) {
        $professional->delete();
        flash('Profissional excluido com sucesso!')->success();
        return $this->index();
      }
      flash('Código não encontrado!')->error();
      return $this->index();
    }

}
