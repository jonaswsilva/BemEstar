<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Carbon;
use App\Schedule;
use App\MedicalAppointment;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      $schedulestoday = Schedule::where('date', Carbon::today()->toDateString())->get();
      //dd($schedulestoday);
      $countschedulestoday = Schedule::where('date', Carbon::today()->toDateString())->count();
      $countschedules = DB::table('schedules')->count();
      $countspatients = DB::table('patients')->count();
      $countsprofessionals = DB::table('professionals')->count();
      $countmedicalrecords = DB::table('medical_records')->count();
      $countsessions = DB::table('sessions')->count();
      $medicalappointmentsmounth = MedicalAppointment::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
      $countposturals = DB::table('posturals')->count();
      $countneurologicals = DB::table('neurologicals')->count();

      return view('home.index')
                  ->with(compact('medicalappointmentsmounth','countposturals','countneurologicals','countmedicalrecords','countschedulestoday','countschedules','schedulestoday',
                      'countspatients','countsprofessionals','countsessions'));
      }
}
