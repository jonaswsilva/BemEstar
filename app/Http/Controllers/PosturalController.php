<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Postural;
use App\MedicalAppointment;
use Redirect;
use View;
use DB;

class PosturalController extends Controller
{

    public function index()
    {
        //
    }


    public function create($id)
    {
      $medicalappointment = MedicalAppointment::findOrFail($id);
      //dd($medicalappointment->patient_id);
      $avaliation = Postural::where('medicalappointment_id', '=' , $medicalappointment->id)->first();
      if ($avaliation === null){
        return view('postural.create')
                  ->with(compact('medicalappointment'));
      }else{
        return $this->show($avaliation->id);
      }
    }

    // public function avaliation($id)
    // {
    //
    //     $medicalappointment = MedicalAppointment::findOrFail($id);
    //     //dd($medicalappointment->patient_id);
    //     $avaliation = Postural::where('medicalappointment_id', '=' , $medicalappointment->id)->first();
    //     if ($avaliation === null){
    //       return view('postural.create')
    //                 ->with(compact('medicalappointment'));
    //     }else{
    //       return $this->show($avaliation->id);
    //     }
    // }


    public function store(Request $request)
    {
        $postural = new Postural();
        //$postural->escd = $request->input('escd');
          $postural->medicalappointment_id = $request->input('medicalappointment_id');
          $postural->comment = $request->input('comment');
          $postural->head =  $request->input('head');
          $postural->cerv =   $request->input('cerv');
          $postural->omb =     $request->input('omb');
          $postural->escd =    $request->input('escd');
          $postural->esce =    $request->input('esce');
          $postural->dorsp =   $request->input('dorsp');
          $postural->tritp =  $request->input('tritp');
          $postural->gmach =  $request->input('gmach');
          $postural->crip =  $request->input('crip');
          $postural->preg =   $request->input('preg');
          $postural->joel =  $request->input('joel');
          $postural->pregp = $request->input('pregp');
          $postural->retrop = $request->input('retrop');
          $postural->heada =  $request->input('heada');
          $postural->clava = $request->input('clava');
          $postural->gladc = $request->input('gladc');
          $postural->ombra = $request->input('ombra');
          $postural->trit = $request->input('trit');
          $postural->rott =  $request->input('rott');
          $postural->cri = $request->input('cri');
          $postural->rotp = $request->input('rotp');
          $postural->joelhva = $request->input('joelhva');
          $postural->palet =  $request->input('palet');
          $postural->antp =  $request->input('antp');
          $postural->headl =  $request->input('headl');
          $postural->cervc = $request->input('cervc');
          $postural->ombr = $request->input('ombr');
          $postural->ms =  $request->input('ms');
          $postural->abdo =  $request->input('abdo');
          $postural->dorsal = $request->input('dorsal');
          $postural->lombar = $request->input('lombar');
          $postural->pelve =  $request->input('pelve');
          $postural->joelh = $request->input('joelh');
          $postural->medp =  $request->input('medp');
        //$postural = $request->all();
        //dd($postural);
        $postural->save();

        //return view('posturals.show."$id"');
        return Redirect::to('postural/'.$postural->id);

    }


    public function show($id)
    {
      $postural = Postural::find($id);
      //dd($postural);
      return View::make('postural.show',compact('postural'));
    }


    public function edit($id)
    {
      $postural = Postural::findOrFail($id);
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      $patients = DB::table('patients')
      ->join('person', 'patients.person_id', '=', 'person.id')
      ->pluck('person.name','patients.id');
      //dd($postural);
      return view('postural.edit')
      ->with(compact('postural'));
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $postural = Postural::findOrFail($id);
        //$postural->escd = $request->input('escd');
        //$postural->medicalappointment_id = $request->input('medicalappointment_id');
        $postural->comment = $request->input('comment');
        $postural->head    = $request->input('head');
        $postural->cerv    = $request->input('cerv');
        $postural->omb     = $request->input('omb');
        $postural->escd    = $request->input('escd');
        $postural->esce    = $request->input('esce');
        $postural->dorsp   = $request->input('dorsp');
        $postural->tritp   = $request->input('tritp');
        $postural->gmach   = $request->input('gmach');
        $postural->crip    = $request->input('crip');
        $postural->preg    = $request->input('preg');
        $postural->joel    = $request->input('joel');
        $postural->pregp   = $request->input('pregp');
        $postural->retrop  = $request->input('retrop');
        $postural->heada   = $request->input('heada');
        $postural->clava   = $request->input('clava');
        $postural->gladc   = $request->input('gladc');
        $postural->ombra   = $request->input('ombra');
        $postural->trit    = $request->input('trit');
        $postural->rott    = $request->input('rott');
        $postural->cri     = $request->input('cri');
        $postural->rotp    = $request->input('rotp');
        $postural->joelhva = $request->input('joelhva');
        $postural->palet   = $request->input('palet');
        $postural->antp    = $request->input('antp');
        $postural->headl   = $request->input('headl');
        $postural->cervc   = $request->input('cervc');
        $postural->ombr    = $request->input('ombr');
        $postural->ms      = $request->input('ms');
        $postural->abdo    = $request->input('abdo');
        $postural->dorsal  = $request->input('dorsal');
        $postural->lombar  = $request->input('lombar');
        $postural->pelve   = $request->input('pelve');
        $postural->joelh   = $request->input('joelh');
        $postural->medp    = $request->input('medp');

        $postural->push();

        return $this->show($postural->id);

    }


    public function destroy($id)
    {
        //
    }
}
