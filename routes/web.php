<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/','HomeController@checkUserType');
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/index','PagesController@index');
Route::get('/coachs','PagesController@coachs');
Route::get('/planning','PagesController@planning');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/admin/dashboard',function(){
    return view('admin/dashboard');
})->name('admin-dashboard');
Route::get('/client/dashboard',function(){
    return view('client/dashboard');
})->name('client-dashboard');
Route::get('/coach/dashboard',function(){
    return view('coach/dashboard');
})->name('coach-dashboard');