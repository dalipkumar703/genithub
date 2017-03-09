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
Route::get('feedback',function() {
  return view('feedback');
});
Route::get('portfolio',function() {
return view('portfolio');
});
Route::get('mail',[
 'uses'=>'submit@sendMail',
  'as'=> 'sendmail',
]);
Route::get('ecommerce-development',function() {
return view('ecommerce');
});

Route::get('web-design',function() {
return view('webdesign');
});

Route::get('android-app-development',function() {
return view('appdesign');
});

Route::get('design',function() {
return view('design');
});
});


