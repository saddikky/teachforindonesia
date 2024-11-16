<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CbController;
use App\Http\Controllers\EventDetailController;
<<<<<<< HEAD
use App\Http\Controllers\ProgressDetailController;
=======
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');
Route::get('/social-event', [AuthController::class, 'showsocialEvent'])->name('social-event');
Route::get('/cb-course', [AuthController::class, 'showCBcourse'])->name('cb-course');
Route::get('/social-innovation-project', [AuthController::class, 'showinnovationProject'])->name('social-innovation-project');
Route::get('/comserv', [AuthController::class, 'showComserv'])->name('comserv');
Route::get('/se-register', [AuthController::class, 'showSEregister'])->name('SEregister');
Route::get('/se-details', [AuthController::class, 'showSEdetails'])->name('SEdetails');
<<<<<<< HEAD


Route::get('/cb-details', [ProgressDetailController::class, 'showCBform'])->name('CBform.show');
Route::post('/cb-details', [ProgressDetailController::class, 'CBform'])->name('CBform.submit');
Route::get('/cb-details-2', [AuthController::class, 'showCBdetails2'])->name('CBdetails2');

=======
Route::get('/cb-details', [AuthController::class, 'showCBdetails'])->name('CBdetails');
Route::get('/cb-details-2', [AuthController::class, 'showCBdetails2'])->name('CBdetails2');
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
Route::get('/si-details', [AuthController::class, 'showSIdetails'])->name('SIdetails');


Route::get('/admin/dashboard', [AuthController::class, 'showAdmDashboard'])->name('admDashboard');

Route::get('/admin/cb-course', [EventDetailController::class, 'showAdmCbcourse'])->name('admCb_course');

Route::get('/admin/create-cb', [EventDetailController::class, 'showAdmCreate'])->name('admCreate');
<<<<<<< HEAD
Route::post('/admin/create-cb', [EventDetailController::class, 'createCb'])->name('createCb');
// Route::get('/admin/create-cb', [EventDetailController::class, 'showAdmCreate'])->name('admCreate');
// Route::get('/admin/create-cb-2', [EventDetailController::class, 'showAdmCreate2'])->name('admCreate2');

Route::get('/admin/edit-cb/{id}', [EventDetailController::class, 'showAdmEdit'])->name('admEdit');
Route::post('/admin/edit-cb/{id}', [EventDetailController::class, 'updateCb'])->name('updateCb');

=======
// Route::get('/admin/create-cb', [EventDetailController::class, 'showAdmCreate'])->name('admCreate');
Route::get('/admin/create-cb-2', [EventDetailController::class, 'showAdmCreate2'])->name('admCreate2');
Route::post('/admin/create-cb', [EventDetailController::class, 'createCb'])->name('createCb');

Route::get('/admin/edit-cb', [EventDetailController::class, 'showAdmEdit'])->name('admEdit');
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
Route::get('/admin/edit-cb-2', [EventDetailController::class, 'showAdmEdit2'])->name('admEdit2');
Route::get('/admin/cb-project', [EventDetailController::class, 'showAdmProject'])->name('admProject');