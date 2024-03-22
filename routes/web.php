<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TechnicianController;
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
Route::get('/login', [PatientController::class, 'login']);
Route::get('/logout', [PatientController::class, 'logout']);
Route::get('/dashboard', [PatientController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/appoint', [PatientController::class, 'appoint'])->middleware('isLoggedIn');
Route::get('/test', [PatientController::class, 'test'])->middleware('isLoggedIn');
Route::get('/contact', [PatientController::class, 'contact'])->middleware('isLoggedIn');
Route::get('/profile', [PatientController::class, 'profile'])->middleware('isLoggedIn');
Route::post('/payments', [PatientController::class, 'payments']);

//Patient Functions
route::post('/addpatient', [PatientController::class, 'addpatient'])->name('addpatient');
route::post('/userloggin', [PatientController::class, 'userloggin'])->name('userloggin');
route::post('/createappointment', [PatientController::class, 'createappointment'])->name('createappointment');











//Technician Navigations
// Route::get('/admin', [PatientController::class, 'admin']);


//Technician Functions



//Admin Navigations
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/adminmain', [AdminController::class, 'adminmain'])->middleware('adminLogin');
Route::get('/adminadd', [AdminController::class, 'adminadd'])->middleware('adminLogin');
Route::get('/adtest', [AdminController::class, 'adtest'])->middleware('adminLogin');
Route::get('/viewappointment', [AdminController::class, 'viewappointment'])->middleware('adminLogin');
Route::get('/patients', [AdminController::class, 'patients'])->middleware('adminLogin');
Route::get('/adprofile', [AdminController::class, 'adprofile'])->middleware('adminLogin');
Route::get('/viewusers', [AdminController::class, 'viewusers'])->middleware('adminLogin');
Route::get('/adresults', [AdminController::class, 'viewusers'])->middleware('adminLogin');
Route::get('/adlogout', [AdminController::class, 'adlogout']);
Route::get('/adtestnew', [AdminController::class, 'adtestnew'])->middleware('adminLogin');



//Admin Functions
Route::post('/adlogin', [AdminController::class, 'adlogin'])->name('adlogin');
Route::post('/adduser', [AdminController::class, 'adduser'])->name('adduser');
Route::post('/removetech', [AdminController::class, 'removetech'])->name('removetech');
Route::post('/savetest', [AdminController::class, 'savetest'])->name('savetest');
Route::post('/removetest', [AdminController::class, 'removetest'])->name('removetest');