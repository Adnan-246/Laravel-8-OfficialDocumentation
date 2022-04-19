<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\FirstController;
//_Invoke Controller_//
use App\Http\Controllers\Example\LearnController;
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
    // dd(app());
    return view('welcome');
});

Route::get('/test', function(){
    Hunter::test();
});

//  Route::get('/about', function () {
//      // dd(app());
//      return view('about');
//  });

//Another Route System
// Route::view('/about', 'about');

// Route::get('/contact', function () {
//     // dd(app());
//     return view('contact');
// });

//_Laravel 8 Route Rule
Route::get('/contact', [FirstController::class, 'index']);

//_Invoke Route
Route::get('/test1', LearnController::class);

//_Middleware Controller
Route::get('/country', [FirstController::class, 'country'])->middleware('country');



// Route::get('/country', function () {
//     // dd(app());
//     return view('country');
// })->middleware('country');

//Named Route
 Route::get( md5('/about') ,function(){
     return view('about');
 })->name('about.us');


//serviceProvider Example
// Route::get('/test', function () {
//     app()->make('first_service_provider');
    
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

