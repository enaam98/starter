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

Route::get('/', function () {
    return view('welcome')->with(['string'=>'enaam','id'=>22]);//بمرر داتا
});

Route::get('/about',function () {
    return view ('about');
});

Route::get('index','Front\UserController@getIndex');

Route::get('/test1', function () {
    return 'welcome laravel';
});
Route::get('/show-string/{id}', function ($id) {
    return $id;})->name('b');

Route::get('/show-num/{id?}', function () {
    return 'laravel'; })->name('a');



 Route::namespace('Front')->group(function(){

    Route::get('show','UserController@showUserName');
 });

 //شكل اول الراوت
//Route::get('/first','Front\FirstController@showString');
//شكل تاني للراوت
Route::group(['namespace'=>'Front'],function(){
    Route::get('/first',//مفروض هان front 
    'FirstController@showString'  );
 });

 //شكل اول للراوت
 Route::get ('second','Admin\SecondController@showString');

//شكل تاني للراوات
 //Route::group(['namespace'=>'Admin'],function(){
    //Route::get('/second',//مفروض هان front 
   // 'SecondController@showString'  );
// });

Route::resource('news','NewsController');

Auth::routes(['verify' => true]);// هان موجودراوتات اللوجين والريجستر

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/redirect/{service}', 'SocialController@redirect');
Route::get('/callback/{service}', 'SocialController@callback');
