<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MedicalAppointment;
use App\Neurological;
use Redirect;
use View;
use DB;

class NeurologicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $medicalappointment = MedicalAppointment::findOrFail($id);
      //dd($medicalappointment->patient_id);
      $avaliation = Neurological::where('medicalappointment_id', '=' , $medicalappointment->id)->first();
      if ($avaliation === null){
        return view('neurological.create')
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
    //     $avaliation = Neurological::where('medicalappointment_id', '=' , $medicalappointment->id)->first();
    //     if ($avaliation === null){
    //       return view('neurological.create')
    //                 ->with(compact('medicalappointment'));
    //     }else{
    //       return $this->show($avaliation->id);
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $neurological = new Neurological();
        $neurological->medicalappointment_id = $request->input('medicalappointment_id');
        $neurological->histp = $request->input('histp');
        $neurological->hista = $request->input('hista');
        $neurological->histf = $request->input('histf');
        $neurological->focf = $request->input('focf');
        $neurological->foml = $request->input('foml');
        $neurological->prot = $request->input('prot');
        $neurological->ort = $request->input('ort');
        $neurological->padrm = $request->input('padrm');
        $neurological->condp = $request->input('condp');
        $neurological->tonb = $request->input('tonb');
        $neurological->distt = $request->input('distt');
        $neurological->grad = $request->input('grad');
        $neurological->testc = $request->input('testc');
        $neurological->mobil = $request->input('mobil');
        $neurological->estab = $request->input('estab');
        $neurological->march = $request->input('march');
        $neurological->estabh = $request->input('estabh');
        $neurological->caracd = $request->input('caracd');
        $neurological->motf = $request->input('motf');
        $neurological->mao = $request->input('mao');
        $neurological->extfp = $request->input('extfp');
        $neurological->abad = $request->input('abad');
        $neurological->rotie = $request->input('rotie');
        $neurological->extfc = $request->input('extfc');
        $neurological->extefp = $request->input('extefp');
        $neurological->pros = $request->input('pros');
        $neurological->extfq = $request->input('extfq');
        $neurological->abadq = $request->input('abadq');
        $neurological->rotaie = $request->input('rotaie');
        $neurological->extfj = $request->input('extfj');
        $neurological->invt = $request->input('invt');
        $neurological->pladt = $request->input('pladt');
        $neurological->senss = $request->input('senss');
        $neurological->sensp = $request->input('sensp');
        $neurological->cortc = $request->input('cortc');

        $neurological->save();

        return Redirect::to('medicalAppointments');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $neurological = Neurological::find($id);
      //dd($neurological);
      return View::make('neurological.show',compact('neurological'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $neurological = Neurological::findOrFail($id);
      $professionals = DB::table('professionals')
      ->join('person', 'professionals.person_id', '=', 'person.id')
      ->pluck('person.name','professionals.id');
      $patients = DB::table('patients')
      ->join('person', 'patients.person_id', '=', 'person.id')
      ->pluck('person.name','patients.id');
      //dd($neurological);
      return view('neurological.edit')
      ->with(compact('neurological'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $neurological = Neurological::findOrFail($id);

      $neurological->histp = $request->input('histp');
      $neurological->hista = $request->input('hista');
      $neurological->histf = $request->input('histf');
      $neurological->focf = $request->input('focf');
      $neurological->foml = $request->input('foml');
      $neurological->prot = $request->input('prot');
      $neurological->ort = $request->input('ort');
      $neurological->padrm = $request->input('padrm');
      $neurological->condp = $request->input('condp');
      $neurological->tonb = $request->input('tonb');
      $neurological->distt = $request->input('distt');
      $neurological->grad = $request->input('grad');
      $neurological->testc = $request->input('testc');
      $neurological->mobil = $request->input('mobil');
      $neurological->estab = $request->input('estab');
      $neurological->march = $request->input('march');
      $neurological->estabh = $request->input('estabh');
      $neurological->caracd = $request->input('caracd');
      $neurological->motf = $request->input('motf');
      $neurological->mao = $request->input('mao');
      $neurological->extfp = $request->input('extfp');
      $neurological->abad = $request->input('abad');
      $neurological->rotie = $request->input('rotie');
      $neurological->extfc = $request->input('extfc');
      $neurological->extefp = $request->input('extefp');
      $neurological->pros = $request->input('pros');
      $neurological->extfq = $request->input('extfq');
      $neurological->abadq = $request->input('abadq');
      $neurological->rotaie = $request->input('rotaie');
      $neurological->extfj = $request->input('extfj');
      $neurological->invt = $request->input('invt');
      $neurological->pladt = $request->input('pladt');
      $neurological->senss = $request->input('senss');
      $neurological->sensp = $request->input('sensp');
      $neurological->cortc = $request->input('cortc');

      $neurological->push();

      return $this->show($neurological->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
