<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Model Bindings */
Route::model('pet','Pet');
Route::model('service','Service');

Route::get('/',['as' => 'contact','uses' => 'HomeController@contact']);

Route::get('/services', ['as' => 'service.list','uses' => 'ServicesController@listServices']);
Route::get('/service/add',['as' => 'service.add','uses' => 'ServicesController@addService']);
Route::post('/service/save',['as' => 'service.save','uses' => 'ServicesController@saveService']);
Route::get('/service/{service}/edit',['as' => 'service.edit','uses' => 'ServicesController@editService']);
Route::patch('/service/{service}/update',['as' => 'service.update','uses' => 'ServicesController@updateService']);
Route::get('/service/{service}/delete',['as' => 'service.delete','uses' => 'ServicesController@deleteService']);

Route::get('/pets', ['as' => 'pet.list','uses' => 'PetsController@listPets']);
Route::get('/pet/add',['as' => 'pet.add','uses' => 'PetsController@addPet']);
Route::post('/pet/save',['as' => 'pet.save','uses' => 'PetsController@savePet']);
Route::get('/pet/{pet}/edit',['as' => 'pet.edit','uses' => 'PetsController@editPet']);
Route::patch('/pet/{pet}/update',['as' => 'pet.update','uses' => 'PetsController@updatePet']);
Route::get('/pet/{pet}/delete',['as' => 'pet.delete','uses' => 'PetsController@deletePet']);