<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::group(['middleware' => 'auth'], function(){
  Route::get('/','HomeController@index');

  Route::get('/autocomplete', 'Controller@autoComplete');

  Route::get('/layout', function () {
    return view('layout.layout');
  });
  Route::get('cities/{id}', 'PatientController@cities');
  Route::resource('patients','PatientController');

  Route::resource('professionals','ProfessionalController');

  Route::get('schedules/all','ScheduleController@all');
  Route::get('schedules/autocomplete', 'ScheduleController@autoComplete');
  Route::resource('schedules','ScheduleController');

  Route::group(['middleware' => 'can:admin-access'], function () {
    Route::resource('procedures','ProceduresController');

    Route::resource('typeprocedures','TypeProceduresController');

    Route::resource('medicalrecords','MedicalRecordsController');

    Route::resource('medicalappointments','MedicalAppointmentController');

    Route::get('postural/{id}/pdf','PosturalController@pdf');
    Route::get('postural/create/{id}','PosturalController@create');
    Route::resource('postural','PosturalController');

    Route::get('neurological/{id}/pdf','NeurologicalController@pdf');
    Route::get('neurological/create/{id}','NeurologicalController@create');
    Route::resource('neurological','NeurologicalController');

    Route::resource('contract','ContractController');

    Route::resource('users','UsersController');
  });
});
