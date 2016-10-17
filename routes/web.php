<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Patients
 */
Route::get("/patients", "PatientController@index")->middleware("cors");
Route::get("/patients/{id}", "PatientController@get")->middleware("cors");

/**
 * Doctors
 */
Route::get("/doctors", "DoctorController@index")->middleware("cors");
Route::get("/doctors/{id}", "DoctorController@get")->middleware("cors");

/**
 * Histories
 */
Route::get("/histories", "HistoryController@index")->middleware("cors");
Route::get("/histories/{id}", "HistoryController@get")->middleware("cors");
Route::get("/histories/doctor/{doctorId}", "HistoryController@getDoctorHistories")->middleware("cors");
/**
 * <Create a history>
 * patientId: integer
 * doctorId: integer
 * historyTypeId: integer
 * description: string
 */
Route::post("/history", "HistoryController@create")->middleware("cors");

/**
 * History Types
 */
Route::get("/history-types", "HistoryTypeController@index")->middleware("cors");
Route::get("/history-types/{id}", "HistoryTypeController@get")->middleware("cors");