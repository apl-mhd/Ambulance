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
/*
Route::get('/', function () {
    return view('index');
});*/




Route::get('/login', 'Backend\BackendController@login')->name('login');
Route::post('/login', 'Backend\BackendController@loginProcess')->name('loginProcess');

Route::get('/registration', 'Backend\BackendController@registration')->name('registration');
Route::post('/registration', 'Backend\BackendController@registrationProcess')->name('registrationProcess');


Route::group(['middleware' =>'auth'], function (){
Route::get('/', 'Backend\BackendController@index');
Route::get('/index', 'Backend\BackendController@index')->name('home');
Route::get('/logout', 'Backend\BackendController@logout')->name('logout');

Route::get('/addAmbulance', 'Backend\BackendController@addAmbulance')->name('addAmbulance');
Route::post('/addAmbulance', 'Backend\BackendController@addAmbulanceProcess')->name('addAmbulanceProcess');

Route::get('/edit/{id}', 'Backend\BackendController@edit')->name('edit');
Route::put('/update/{id}', 'Backend\BackendController@update')->name('update');/**/
Route::delete('/deleteAmbulanceInfo/{id}', 'Backend\BackendController@deleteAmbulanceInfo')->name('deleteAmbulanceInfo');/**/

    Route::get('/ambulancelist/{id}', 'Backend\BackendController@ambulancelist')->name('ambulancelist');





});