<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CbController;
use App\Http\Controllers\EventDetailController;
use App\Http\Controllers\ProgressDetailController;
use App\Http\Controllers\UserController;
use App\Models\EventDetail;
use App\Models\ProgressDetail;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AuthController::class, 'showAdmDashboard'])->name('admDashboard');

        Route::get('/cb-course', [EventDetailController::class, 'showAdmCbcourse'])->name('admCb_course');

        Route::get('/create-cb', [EventDetailController::class, 'showAdmCreate'])->name('admCreate');
        Route::post('/create-cb', [EventDetailController::class, 'createCb'])->name('createCb');

        Route::get('/edit-cb/{id}', [EventDetailController::class, 'showAdmEdit'])->name('admEdit');
        Route::post('/edit-cb/{id}', [EventDetailController::class, 'updateCb'])->name('updateCb');

        Route::get('/cb-project', [EventDetailController::class, 'showAdmProject'])->name('admProject');
        
        Route::post('/update-status', [ProgressDetailController::class, 'updateStatus'])->name('updateStatus');
    });

    Route::get('/', [AuthController::class, 'showHome'])->name('home');
    Route::get('/comserv', [AuthController::class, 'showComserv'])->name('comserv');

    Route::get('/progress-form/edit/{id}', [ProgressDetailController::class, 'editProgressForm'])->name('progress-form.edit');
    Route::post('/progress-form/edit/{id}', [ProgressDetailController::class, 'updateProgressForm'])->name('progress-form.update')->middleware('throttle:submit-links');

    Route::get('/cb-course', [ProgressDetailController::class, 'showEventsForUser'])->name('cb-course');
    Route::get('/cb-details/{event_id}', [ProgressDetailController::class, 'showCBform'])->name('CBform.show')->middleware('checkEventStatus');
    Route::post('/cb-details/{event_id}', [ProgressDetailController::class, 'CBform'])->name('CBform.submit')->middleware('throttle:submit-links', 'checkEventStatus');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
