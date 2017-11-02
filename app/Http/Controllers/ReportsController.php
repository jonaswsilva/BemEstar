<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SessionRequest;
use App\Schedule;
use DB;
use Carbon;
use App\MedicalAppointment;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $schedulestoday = Schedule::where('date', Carbon::today()->toDateString())->get();
      $countschedulestoday = Schedule::where('date', Carbon::today()->toDateString())->count();
      $countschedules = DB::table('schedules')->count();
      $countspatients = DB::table('patients')->count();
      $countsprofessionals = DB::table('professionals')->count();
      $countmedicalrecords = DB::table('medical_records')->count();
      $countsessions = DB::table('sessions')->count();
      $medicalappointmentsmounth = MedicalAppointment::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
      $countposturals = DB::table('posturals')->count();
      $countneurologicals = DB::table('neurologicals')->count();

      return view('reports.index')
                ->with(compact('countmedicalrecords','countneurologicals','countposturals','medicalappointmentsmounth','countschedulestoday','countschedules','schedulestoday','countspatients','countsprofessionals','countsessions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
