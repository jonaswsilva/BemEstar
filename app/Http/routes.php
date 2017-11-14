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

  Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

  Route::get('/autocomplete', 'Controller@autoComplete');

  Route::get('/layout', function () {
    return view('layout.layout');
  });
  Route::get('cities/{id}', 'PatientController@cities');
  Route::get('contract/{id}/pdf',['uses'=>'ContractController@pdf','middleware'=>['permission:contract-pdf']]);
  Route::post('contract/find',['uses'=>'ContractController@find','middleware'=>['permission:contract-find']]);
  //Route::resource('patients','PatientController');
  Route::get('patients',['as'=>'patients.index','uses'=>'PatientController@index','middleware' => ['permission:patients-list|patients-create|patients-edit|patients-delete']]);
  Route::get('patients/create',['as'=>'patients.create','uses'=>'PatientController@create','middleware' => ['permission:patients-create']]);
  Route::post('patients/create',['as'=>'patients.store','uses'=>'PatientController@store','middleware' => ['permission:patients-create']]);
  Route::get('patients/{id}',['as'=>'patients.show','uses'=>'PatientController@show']);
  Route::get('patients/{id}/edit',['as'=>'patients.edit','uses'=>'PatientController@edit','middleware' => ['permission:patients-edit']]);
  Route::patch('patients/{id}',['as'=>'patients.update','uses'=>'PatientController@update','middleware' => ['permission:patients-edit']]);
  Route::delete('patients/{id}',['as'=>'patients.destroy','uses'=>'PatientController@destroy','middleware' => ['permission:patients-delete']]);

  //Route::resource('professionals','ProfessionalController');
  Route::get('professionals',['as'=>'professionals.index','uses'=>'ProfessionalController@index','middleware' => ['permission:professionals-list|professionals-create|professionals-edit|professionals-delete']]);
  Route::get('professionals/create',['as'=>'professionals.create','uses'=>'ProfessionalController@create','middleware' => ['permission:professionals-create']]);
  Route::post('professionals/create',['as'=>'professionals.store','uses'=>'ProfessionalController@store','middleware' => ['permission:professionals-create']]);
  Route::get('professionals/{id}',['as'=>'professionals.show','uses'=>'ProfessionalController@show']);
  Route::get('professionals/{id}/edit',['as'=>'professionals.edit','uses'=>'ProfessionalController@edit','middleware' => ['permission:professionals-edit']]);
  Route::patch('professionals/{id}',['as'=>'professionals.update','uses'=>'ProfessionalController@update','middleware' => ['permission:professionals-edit']]);
  Route::delete('professionals/{id}',['as'=>'professionals.destroy','uses'=>'ProfessionalController@destroy','middleware' => ['permission:professionals-delete']]);


  Route::get('schedules/all',['uses'=>'ScheduleController@all','middleware'=>['permission:schedules-all']]);
  Route::get('schedules/autocomplete', 'ScheduleController@autoComplete');
  //Route::resource('schedules','ScheduleController');
  Route::get('schedules',['as'=>'schedules.index','uses'=>'ScheduleController@index','middleware' => ['permission:schedules-list|schedules-create|schedules-edit|schedules-delete']]);
  Route::get('schedules/create',['as'=>'schedules.create','uses'=>'ScheduleController@create','middleware' => ['permission:schedules-create']]);
  Route::post('schedules/create',['as'=>'schedules.store','uses'=>'ScheduleController@store','middleware' => ['permission:schedules-create']]);
  Route::get('schedules/{id}',['as'=>'schedules.show','uses'=>'ScheduleController@show']);
  Route::get('schedules/{id}/edit',['as'=>'schedules.edit','uses'=>'ScheduleController@edit','middleware' => ['permission:schedules-edit']]);
  Route::patch('schedules/{id}',['as'=>'schedules.update','uses'=>'ScheduleController@update','middleware' => ['permission:schedules-edit']]);
  Route::delete('schedules/{id}',['as'=>'schedules.destroy','uses'=>'ScheduleController@destroy','middleware' => ['permission:schedules-delete']]);


    Route::get('reports',['uses'=>'ReportsController@index','middleware' => ['permission:reports-list']]);

    Route::get('procedures/{id}/pdf',['uses'=>'ProceduresController@pdf','middleware'=>['permission:procedure-pdf']]);
    //Route::resource('procedures',['uses'=>'ProceduresController','middleware' => ['permission:procedures']]);
    Route::get('procedures',['as'=>'procedures.index','uses'=>'ProceduresController@index','middleware' => ['permission:procedures-list|procedures-create|procedures-edit|procedures-delete']]);
  	Route::get('procedures/create',['as'=>'procedures.create','uses'=>'ProceduresController@create','middleware' => ['permission:procedures-create']]);
  	Route::post('procedures/create',['as'=>'procedures.store','uses'=>'ProceduresController@store','middleware' => ['permission:procedures-create']]);
  	Route::get('procedures/{id}',['as'=>'procedures.show','uses'=>'ProceduresController@show']);
  	Route::get('procedures/{id}/edit',['as'=>'procedures.edit','uses'=>'ProceduresController@edit','middleware' => ['permission:procedures-edit']]);
  	Route::patch('procedures/{id}',['as'=>'procedures.update','uses'=>'ProceduresController@update','middleware' => ['permission:procedures-edit']]);
  	Route::delete('procedures/{id}',['as'=>'procedures.destroy','uses'=>'ProceduresController@destroy','middleware' => ['permission:procedures-delete']]);

    Route::get('typeprocedures/{id}/destroy','TypeProceduresController@destroy');
    //Route::resource('typeprocedures','TypeProceduresController');
    Route::get('typeprocedures',['as'=>'typeprocedures.index','uses'=>'TypeProceduresController@index','middleware' => ['permission:typeprocedures-list|typeprocedures-create|typeprocedures-edit|typeprocedures-delete']]);
  	Route::get('typeprocedures/create',['as'=>'typeprocedures.create','uses'=>'TypeProceduresController@create','middleware' => ['permission:typeprocedures-create']]);
  	Route::post('typeprocedures/create',['as'=>'typeprocedures.store','uses'=>'TypeProceduresController@store','middleware' => ['permission:typeprocedures-create']]);
  	Route::get('typeprocedures/{id}',['as'=>'typeprocedures.show','uses'=>'TypeProceduresController@show']);
  	Route::get('typeprocedures/{id}/edit',['as'=>'typeprocedures.edit','uses'=>'TypeProceduresController@edit','middleware' => ['permission:typeprocedures-edit']]);
  	Route::patch('typeprocedures/{id}',['as'=>'typeprocedures.update','uses'=>'TypeProceduresController@update','middleware' => ['permission:typeprocedures-edit']]);
  	Route::delete('typeprocedures/{id}',['as'=>'typeprocedures.destroy','uses'=>'TypeProceduresController@destroy','middleware' => ['permission:typeprocedures-delete']]);

    //Route::resource('medicalrecords','MedicalRecordsController');
    Route::get('medicalrecords',['as'=>'medicalrecords.index','uses'=>'MedicalRecordsController@index','middleware' => ['permission:medicalrecords-list|medicalrecords-create|medicalrecords-edit|medicalrecords-delete']]);
  	Route::get('medicalrecords/create',['as'=>'medicalrecords.create','uses'=>'MedicalRecordsController@create','middleware' => ['permission:medicalrecords-create']]);
  	Route::post('medicalrecords/create',['as'=>'medicalrecords.store','uses'=>'MedicalRecordsController@store','middleware' => ['permission:medicalrecords-create']]);
  	Route::get('medicalrecords/{id}',['as'=>'medicalrecords.show','uses'=>'MedicalRecordsController@show']);
  	Route::get('medicalrecords/{id}/edit',['as'=>'medicalrecords.edit','uses'=>'MedicalRecordsController@edit','middleware' => ['permission:medicalrecords-edit']]);
  	Route::patch('medicalrecords/{id}',['as'=>'medicalrecords.update','uses'=>'MedicalRecordsController@update','middleware' => ['permission:medicalrecords-edit']]);
  	Route::delete('medicalrecords/{id}',['as'=>'medicalrecords.destroy','uses'=>'MedicalRecordsController@destroy','middleware' => ['permission:medicalrecords-delete']]);

    Route::get('medicalrecords/session/find',['uses'=>'MedicalRecordsController@findSession','middleware'=>['permission:session-find']]);
    Route::post('medicalrecords/session',['uses'=>'MedicalRecordsController@session','middleware'=>['permission:session-create']]);
    Route::post('medicalrecords/destroy/{sessionid}/medical/{medicalid}',['uses'=>'MedicalRecordsController@destroySession','middleware'=>['permission:session-delete']]);
    Route::post('medicalrecords/session/store',['uses'=>'MedicalRecordsController@storeSession','middleware'=>['permission:session-create']]);

    //Route::resource('medicalappointments','MedicalAppointmentController');
    Route::get('medicalappointments',['as'=>'medicalappointments.index','uses'=>'MedicalAppointmentController@index','middleware' => ['permission:medicalappointments-list|medicalappointments-create|medicalappointments-edit|medicalappointments-delete']]);
  	Route::get('medicalappointments/create',['as'=>'medicalappointments.create','uses'=>'MedicalAppointmentController@create','middleware' => ['permission:medicalappointments-create']]);
  	Route::post('medicalappointments/create',['as'=>'medicalappointments.store','uses'=>'MedicalAppointmentController@store','middleware' => ['permission:medicalappointments-create']]);
  	Route::get('medicalappointments/{id}',['as'=>'medicalappointments.show','uses'=>'MedicalAppointmentController@show']);
  	Route::get('medicalappointments/{id}/edit',['as'=>'medicalappointments.edit','uses'=>'MedicalAppointmentController@edit','middleware' => ['permission:medicalappointments-edit']]);
  	Route::patch('medicalappointments/{id}',['as'=>'medicalappointments.update','uses'=>'MedicalAppointmentController@update','middleware' => ['permission:medicalappointments-edit']]);
  	Route::delete('medicalappointments/{id}',['as'=>'medicalappointments.destroy','uses'=>'MedicalAppointmentController@destroy','middleware' => ['permission:medicalappointments-delete']]);


    Route::get('postural/{id}/pdf',['uses'=>'PosturalController@pdf','middleware'=>['permission:postural-pdf']]);
    Route::get('postural/create/{id}',['uses'=>'PosturalController@create','middleware'=>['permission:postural-create']]);
    //Route::resource('postural','PosturalController');
    Route::get('postural',['as'=>'postural.index','uses'=>'PosturalController@index','middleware' => ['permission:postural-list|postural-create|postural-edit|postural-delete']]);
  	// Route::get('postural/create',['as'=>'postural.create','uses'=>'PosturalController@create','middleware' => ['permission:postural-create']]);
  	Route::post('postural/create',['as'=>'postural.store','uses'=>'PosturalController@store','middleware' => ['permission:postural-create']]);
  	Route::get('postural/{id}',['as'=>'postural.show','uses'=>'PosturalController@show']);
  	Route::get('postural/{id}/edit',['as'=>'postural.edit','uses'=>'PosturalController@edit','middleware' => ['permission:postural-edit']]);
  	Route::patch('postural/{id}',['as'=>'postural.update','uses'=>'PosturalController@update','middleware' => ['permission:postural-edit']]);
  	Route::delete('postural/{id}',['as'=>'postural.destroy','uses'=>'PosturalController@destroy','middleware' => ['permission:postural-delete']]);


    Route::get('neurological/{id}/pdf',['uses'=>'NeurologicalController@pdf','middleware'=>['permission:neurological-pdf']]);
    Route::get('neurological/create/{id}',['uses'=>'NeurologicalController@create','middleware'=>['permission:neurological-create']]);
    //Route::resource('neurological','NeurologicalController');
    Route::get('neurological',['as'=>'neurological.index','uses'=>'NeurologicalController@index','middleware' => ['permission:neurological-list|neurological-create|neurological-edit|neurological-delete']]);
  	//Route::get('neurological/create',['as'=>'neurological.create','uses'=>'NeurologicalController@create','middleware' => ['permission:neurological-create']]);
  	Route::post('neurological/create',['as'=>'neurological.store','uses'=>'NeurologicalController@store','middleware' => ['permission:neurological-create']]);
  	Route::get('neurological/{id}',['as'=>'neurological.show','uses'=>'NeurologicalController@show']);
  	Route::get('neurological/{id}/edit',['as'=>'neurological.edit','uses'=>'NeurologicalController@edit','middleware' => ['permission:neurological-edit']]);
  	Route::patch('neurological/{id}',['as'=>'neurological.update','uses'=>'NeurologicalController@update','middleware' => ['permission:neurological-edit']]);
  	Route::delete('neurological/{id}',['as'=>'neurological.destroy','uses'=>'NeurologicalController@destroy','middleware' => ['permission:neurological-delete']]);

    Route::resource('contract','ContractController');

    //Route::resource('users','UsersController');
    Route::get('users',['as'=>'users.index','uses'=>'UsersController@index','middleware' => ['permission:users-list|users-create|users-edit|users-delete']]);
  	Route::get('users/create',['as'=>'users.create','uses'=>'UsersController@create','middleware' => ['permission:users-create']]);
  	Route::post('users/create',['as'=>'users.store','uses'=>'UsersController@store','middleware' => ['permission:users-create']]);
  	Route::get('users/{id}',['as'=>'users.show','uses'=>'UsersController@show']);
  	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UsersController@edit','middleware' => ['permission:users-edit']]);
  	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UsersController@update','middleware' => ['permission:users-edit']]);
  	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UsersController@destroy','middleware' => ['permission:users-delete']]);

});
