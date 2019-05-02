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
    return view('Episodes.AddNewEpisode');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('name' , 'HomeController@returnName');

//clients
Route::get('client/delete/{id}' , 'ClientController@delete');

Route::get('clients' , 'ClientController@read');

Route::get('clients/{id}' , 'ClientController@readClient');
Route::post('client' , 'ClientController@create');

Route::get('allEpisodes','ClientController@returnPage');
Route::get('currentEpisode/{id}','ClientController@returnCurrentEpisode');
Route::get('finReport/{id}','ClientController@returnFinReport');

//admin reg
Route::get('admins' , 'ClientController@readAdmin');
Route::post('admin' , 'ClientController@createAdmin');



//archive

Route::get('archive' , 'Customs_clearnceController@returnArchive');
Route::get('archive/{id}' , 'Customs_clearnceController@updateArchive');
Route::get('currArchive/{id}' , 'Customs_clearnceController@returnArchiveData');
Route::get('episodeBack/{id}' , 'Customs_clearnceController@episodeBack');
Route::get('finArchive/{id}' , 'Financial_reportController@archiveFinReport');







//Customs_clearnceController
Route::get('episodes' , 'Customs_clearnceController@returnEpisodes');
Route::get('print' , 'Customs_clearnceController@returnPrint');
Route::get('completeEpisodes' , 'Customs_clearnceController@completeEpisodes');
Route::get('returnCurrentData/{id}', 'Customs_clearnceController@returnCurrentData');



Route::post('custom' , 'Customs_clearnceController@create');
Route::post('phase2/{id}' , 'Customs_clearnceController@createPhase2');
Route::post('phase3/{id}' , 'Customs_clearnceController@createPhase3');
Route::post('phase4/{id}' , 'Customs_clearnceController@createPhase4');
Route::post('updateData/{id}' , 'Customs_clearnceController@updateallItems');

Route::get('read' , 'Customs_clearnceController@read');
Route::get('completeData' , 'Customs_clearnceController@completeData');

Route::get('episode' , 'Customs_clearnceController@returnPage');
Route::get('episode/delete/{id}', 'Customs_clearnceController@delete');

//financial report

Route::get('financialReport/{id}' , 'Financial_reportController@returnPage');
Route::post('addFinancialReport/{id}' , 'Financial_reportController@create');
Route::post('updateFinancialReport/{id}' , 'Financial_reportController@update');
Route::get('showFinReport/{id}' , 'Financial_reportController@returnFinReport');

//logout
Route::get('logout' , 'user_actionsController@logout');
//change password
Route::post('changePassword' , 'user_actionsController@changePass');
//Route::post('clientChangePassword' , 'user_actionsController@clientChangePass');
Route::get('returnChangePass' , 'user_actionsController@returnChangePassword');
Route::get('returnClientChangePass' , 'user_actionsController@returnClientChangePassword');
//new client account
//Route::get('clientReg','user_actionsController@returnClientReg');

