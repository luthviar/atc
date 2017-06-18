<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('module', 'ModuleController');

Route::resource('training', 'TrainingController');

Route::resource('test', 'TestController');

Route::get('/test/create/{idSection}', 'TestController@create');

Route::post('/test/create', 'TestController@store');

Route::get('/section/create/{id}', 'SectionTrainingController@create');

Route::post('/section/create', 'SectionTrainingController@store');

Route::post('/answer/{id}', 'JawabanTraineeController@store');


