<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect()->route('login');
});
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/assessment', [PageController::class, 'assessments'])->name('assessments');
    Route::get('/assessment/create', [PageController::class, 'assessment_create'])->name('assessment_create');
    Route::get('/archive', [PageController::class, 'archives'])->name('archives');
    Route::get('/hospital', [PageController::class, 'hospitals'])->name('hospitals');
    Route::get('/room', [PageController::class, 'rooms'])->name('rooms');
    Route::get('/user', [PageController::class, 'users'])->name('users');

    // Assessment Controller
    Route::post('/assessment/submit', [AssessmentController::class, 'submit_an_assessment'])->name('submit_an_assessment');
    Route::get('/assessment/{id}/data-pasien', [AssessmentController::class, 'data_pasien'])->name('data_pasien');
    Route::post('/assessment/{id}/data-pasien/submit', [AssessmentController::class, 'data_pasien_submit'])->name('data_pasien_submit');
});