<?php

use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/admin/welcom', function () {
    return view('welcomdashpord');
})->middleware('auth');



Route::get('/admin/home', function () {
    return view('adminhome');
});

Route::get('/admin/statstics', function () {
  
  if ( Auth::user()->can('statstics', app('App\Models\Appointment'))) {
    return view('ehsat');
  }else
  {
    return;
  }
   
   
});

Route::get('/admin/today', function () {
    return view('today-apoetment');
})->name('/admin/today')->middleware('auth');

Route::get('/adminn', function () {
    return view('home');
});
Route::get('/admin/moeed', function () {
    return view('index');
})->middleware('auth');
 
Route::get('admin/allmoeed', function () {
    return view('moeed');
})->middleware('auth');


Route::get('admin/my-profile', function () {
    return view('myprofile');
})->middleware('auth');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth']], function() {
  
     Route::get('admin/register', function () {
        return view('home');
    })->middleware('verified');
});

 
 

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
