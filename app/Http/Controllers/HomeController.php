<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Carbon;

use App\Schedule;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      $schedulestoday = Schedule::where('date', Carbon::today()->toDateString())->get();


      $countschedules = DB::table('schedules')->count();

      $countspatients = DB::table('patients')->count();

      $countsprofessionals = DB::table('professionals')->count();

      return view('home.index')
                ->with(compact('countschedules','schedulestoday','countspatients','countsprofessionals'));

    }
}
