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
Route::group(['middlewareGroups' => ['web']], function () {

 Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[
 'uses' => 'submit@index1',
  'as' => 'index1',
]);
Route::post('submit',[
 'uses' => 'submit@submit',
 'as' => 'submit',
]);
 Route::post('get-in-touch',[
 'uses' => 'submit@getintouch',
  'as'=> 'getintouch',
]);
Route::get('sitemap.xml',function() {
 return view('sitemap');
});
 Route::get('robots.txt',function() {
  return view('robots');
});
Route::get('/nikhilarora',function() {
  return view('nikhilarora');
});

Route::get('/saumyatiwari',function() {
  return view('saumyatiwari');
});
});

