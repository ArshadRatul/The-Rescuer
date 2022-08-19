<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\UserController;
use App\Models\doctorT;
use App\Models\AppointmentT;
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

$doctorT =doctorT::all();
$AppointmentT =AppointmentT::all();
    return view('Dashboard.home' , compact('AppointmentT'));
});
// Route::get('/', function () {


//         return view('location' );
//     });

Route::get('/redirects', [AppController::class,'LoginFunction'] );
// Route::get('/AddDoctor', [HospitalController::class,'AddDoctorFunction'] );
// Route::post('/DoctorInformation', [HospitalController::class,'AddDoctor'] );


Route::controller(HospitalController::class)->group(function () {
    Route::get('/AddDoctor','AddDoctorFunction' );
    Route::post('/DoctorInformation', 'AddDoctor');
    Route::get('/ViewAppointment','ViewAppointmentFunction' );
    Route::get('/AppointDoctor/{id}','AppointDoctorFunction' );
});
Route::controller(UserController::class)->group(function () {

    Route::get('/DoctorHelp', 'DoctorHelpFunction');
    Route::post('/MakeAppointment','MakeAppointmentFunction' );
    Route::get('/CHeckHelpStatus', 'CHeckHelpStatusFunction');
    Route::get('/CancelRequest/{id}', 'CancelRequestFunction');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
