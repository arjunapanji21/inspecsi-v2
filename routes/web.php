<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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
    Route::get('/hospital', [HospitalController::class, 'hospitals'])->name('hospitals');
    Route::get('/hospital/baru', [HospitalController::class, 'hospital_baru'])->name('hospital_baru');
    Route::post('/hospital/baru/simpan', [HospitalController::class, 'hospital_baru_simpan'])->name('hospital_baru_simpan');
    Route::get('/hospital/edit/{id}', [HospitalController::class, 'hospital_edit'])->name('hospital_edit');
    Route::post('/hospital/update/{id}', [HospitalController::class, 'hospital_update'])->name('hospital_update');
    Route::get('/hospital/hapus/{id}', [HospitalController::class, 'hospital_hapus'])->name('hospital_hapus');
    Route::get('/room', [RoomController::class, 'rooms'])->name('rooms');
    Route::get('/room/baru', [RoomController::class, 'room_baru'])->name('room_baru');
    Route::post('/room/baru/simpan', [RoomController::class, 'room_baru_simpan'])->name('room_baru_simpan');
    Route::get('/room/edit/{id}', [RoomController::class, 'room_edit'])->name('room_edit');
    Route::post('/room/update/{id}', [RoomController::class, 'room_update'])->name('room_update');
    Route::get('/room/hapus/{id}', [RoomController::class, 'room_hapus'])->name('room_hapus');
    Route::get('/user', [UserController::class, 'users'])->name('users');
    Route::get('/user/baru', [UserController::class, 'user_baru'])->name('user_baru');
    Route::post('/user/baru/simpan', [UserController::class, 'user_baru_simpan'])->name('user_baru_simpan');
    Route::get('/user/edit/{id}', [UserController::class, 'user_edit'])->name('user_edit');
    Route::post('/user/update/{id}', [UserController::class, 'user_update'])->name('user_update');
    Route::get('/user/delete/{id}', [UserController::class, 'user_hapus'])->name('user_hapus');
    Route::get('/diagnosa', [DiagnosaController::class, 'diagnosa'])->name('diagnosa');
    Route::get('/diagnosa/baru', [DiagnosaController::class, 'diagnosa_baru'])->name('diagnosa_baru');
    Route::post('/diagnosa/baru/submit', [DiagnosaController::class, 'diagnosa_baru_simpan'])->name('diagnosa_baru_simpan');
    Route::get('/diagnosa/edit/{id}', [DiagnosaController::class, 'diagnosa_edit'])->name('diagnosa_edit');
    Route::get('/diagnosa/hapus/{id}', [DiagnosaController::class, 'diagnosa_hapus'])->name('diagnosa_hapus');
    Route::post('/diagnosa/update/{id}', [DiagnosaController::class, 'diagnosa_update'])->name('diagnosa_update');

    // Assessment Controller
    Route::post('/assessment/submit', [AssessmentController::class, 'submit_an_assessment'])->name('submit_an_assessment');
    Route::get('/assessment/hapus/{id}', [AssessmentController::class, 'assessment_delete'])->name('assessment_delete');
    Route::get('/assessment/{id}/data-pasien', [AssessmentController::class, 'data_pasien'])->name('data_pasien');
    Route::post('/assessment/{id}/data-pasien/submit', [AssessmentController::class, 'data_pasien_submit'])->name('data_pasien_submit');
    Route::get('/assessment/{id}/perkembangan-pasien', [AssessmentController::class, 'perkembangan_pasien'])->name('perkembangan_pasien');
    Route::post('/assessment/{id}/perkembangan-pasien/submit', [AssessmentController::class, 'perkembangan_pasien_submit'])->name('perkembangan_pasien_submit');
    Route::get('/assessment/{id}/penilaian', [AssessmentController::class, 'penilaian'])->name('penilaian');
    Route::post('/assessment/{id}/penilaian/submit', [AssessmentController::class, 'penilaian_submit'])->name('penilaian_submit');
});