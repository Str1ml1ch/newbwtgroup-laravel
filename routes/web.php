<?php
  use App\Task;
  use Illuminate\Http\Request;
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
Auth::routes(['register' => true]);

Route::match(['get','post'],'/',['uses'=>'RegisterController@show','as'=>'registration']);

Route::match(['get','post'],'/entersite',['uses'=>'EnterController@show','as'=>'entertosite',['middleware' =>[ 'web']]]);

Route::get('/weather',['uses'=>'WeatherController@show','as'=>'weather']);

Route::match(['get','post'],'/feedback',['uses'=>'SendfeedController@show','as'=>'parsing']);

Route::get('watchfeed.{id?}',['uses'=>'WatchFeedController@show','as'=>'watchfeed']);

Route::get('/exit',['uses'=>'ExitController@show','as'=>'exit']);

//DB::listen(function($query) {
//    var_dump($query->sql, $query->bindings);
//});

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('test',function() { echo
    Auth::user()->email; }); });