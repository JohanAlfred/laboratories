<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
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
//Patient Navigations
Route::get('/', function () {
    return view('index');
});
Route::get('/register', [PatientController::class, 'register']);

//Patient Functions
route::post('/addpatient', [PatientController::class, 'addpatient'])->name('addpatient');


//Technician Navigations



//Technician Functions



//Admin Navigations



//Admin Functions