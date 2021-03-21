<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', 'App\Http\Controllers\SiteController@home');
// Route::get('/login', 'App\Http\Controllers\SiteController@login')->name('login');
// Route::post('/postlogin', 'App\Http\Controllers\SiteController@postlogin');
// Route::get('/logout', 'App\Http\Controllers\SiteController@logout');


// Route::get('/dashboard', 'App\Http\Controllers\SiteController@dashboard')->middleware('auth');

// Route::get('/symptoms', 'App\Http\Controllers\SymptomsController@index')->middleware('auth');
// Route::get('/addSymptoms', 'App\Http\Controllers\SymptomsController@create')->middleware('auth');
// Route::post('/symptoms', 'App\Http\Controllers\SymptomsController@store')->middleware('auth');
// Route::get('/symptoms/{symptom}/delete', 'App\Http\Controllers\SymptomsController@destroy')->middleware('auth');
// Route::get('/editSymptoms/{symptom}', 'App\Http\Controllers\SymptomsController@edit')->middleware('auth');
// Route::patch('/editSymptoms/{symptom}', 'App\Http\Controllers\SymptomsController@update')->middleware('auth');
// // Route::resource('symptoms','App\Http\Controllers\SymptomsController');

// Route::get('/trouble', 'App\Http\Controllers\TroublesController@index')->middleware('auth');
// Route::get('/addTrouble', 'App\Http\Controllers\TroublesController@create')->middleware('auth');
// Route::post('/trouble', 'App\Http\Controllers\TroublesController@store')->middleware('auth');
// Route::get('/trouble/{trouble}/delete', 'App\Http\Controllers\TroublesController@destroy')->middleware('auth');
// Route::get('/editTroubles/{trouble}', 'App\Http\Controllers\TroublesController@edit')->middleware('auth');
// Route::patch('/editTroubles/{trouble}', 'App\Http\Controllers\TroublesController@update')->middleware('auth');

// Route::get('/rule', 'App\Http\Controllers\RulesController@index')->middleware('auth');
// Route::get('/history', 'App\Http\Controllers\HistoryController@index')->middleware('auth');



/*
| Home Route
*/
Route::get('/', 'SiteController@home');
Route::get('/loginn', 'SiteController@login')->name('login');
Route::post('/postlogin', 'SiteController@postlogin');
Route::get('/logout', 'SiteController@logout');

/*
| Dashbaord Route
*/
Route::middleware('auth')->prefix('dashboard')->group(function () {
    ############# DASHBOARD ###########
    Route::get('/', 'SiteController@dashboard')->name('dashboard');
    
    ############# SYMPTOMS ###########
    Route::get('/symptoms', 'SymptomsController@index')->name('symptoms');
    Route::get('/symptoms/add', 'SymptomsController@create')->name('symptoms.add');
    Route::post('/symptoms/add/action', 'SymptomsController@store')->name('symptoms.store');
    Route::get('/symptoms/delete/{symptom}', 'SymptomsController@destroy')->name('symptoms.destroy');
    Route::get('/symptoms/edit/{symptom}', 'SymptomsController@edit')->name('symptoms.edit');
    Route::patch('/symptoms/edit/{symptom}', 'SymptomsController@update')->name('symptoms.update');

    ############# TROUBLE ###########
    Route::get('/trouble', 'TroublesController@index')->name('trouble');
    Route::get('/trouble/add', 'TroublesController@create')->name('trouble.add');
    Route::post('/trouble/add/action', 'TroublesController@store')->name('trouble.store');
    Route::get('/trouble/delete/{trouble}', 'TroublesController@destroy')->name('trouble.destroy');
    Route::get('/trouble/edit/{trouble}', 'TroublesController@edit')->name('trouble.edit');
    Route::patch('/trouble/edit/{trouble}', 'TroublesController@update')->name('trouble.update');

    ############# RULE ###########
    Route::get('/rule', 'RulesController@index')->name('rule');
    Route::get('/rule/{trouble}', 'RulesController@detail')->name('rule.detail');
    Route::get('/rule/{trouble}/add', 'RulesController@create')->name('rule.add');
    Route::post('/rule/{trouble}/add/action', 'RulesController@store')->name('rule.store');
    Route::get('/rule/delete/{trouble}/{rule}', 'RulesController@destroy')->name('rule.destroy');
    Route::get('/rule/edit/{rule}', 'RulesController@edit')->name('rule.edit');
    Route::post('/rule/edit/{rule}', 'RulesController@update')->name('rule.update');

    ############# History ###########
    Route::get('/history', 'HistoryController@index')->name('history');
    Route::get('/history/detail/{result}', 'HistoryController@edit')->name('history.detail');

});
############# Data ###########
Route::get('/data', 'DataController@index')->name('data');

############# Prediction ###########
Route::get('/prediction', 'PredictionController@index')->name('prediction');
Route::post('/prediction/action', 'PredictionController@predict')->name('prediction.action');

############# Troubleshoot ###########
Route::get('/troubleshoot', 'TroubleshootController@index')->name('troubleshoot');
// Route::post('/dataUser/troubleshoot', 'TroubleshootController@create')->name('dataUser.troubleshoot');
Route::post('/troubleshoot/troubleshootResult', 'PredictionController@predict')->name('troubleshoot.troubleshootResult');