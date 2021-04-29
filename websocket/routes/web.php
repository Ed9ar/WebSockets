<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PackageController;
use App\Events\PackageUpdateNotification;

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

//Sustituir mensaje 
Route::get('/event/{package}', function($package){
    event(new PackageUpdateNotification($package));
});

Route::get('listen', function(){
    listen();
    //return redirect()->route('package.index');
});

Route::get('/', 'App\Http\Controllers\PackageController@index');

Route::resource('package', 'App\Http\Controllers\PackageController');
