<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;


Route::middleware('guest')->group(function () {
    Route::get('/',[AdminController::class ,'index']);

    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::post('/login', [AuthController::class , 'login'])->name('login');
    Route::post('/contact', [AdminController::class, 'submitForm'])->name('contact.submit');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profiles', [AdminController::class, 'viewProfile'])->name('viewprofile');
    Route::post('/updateprofile', [AdminController::class, 'updateProfile'])->name('updateprofile');
    Route::get('/create-skill', [SkillController::class, 'create'])->name('create-skill');
    Route::get('/data-skill', [SkillController::class, 'indexed'])->name('data-skill');
    Route::post('/storeskill', [SkillController::class, 'store'])->name('storeskill');
    Route::get('/edit-skill/{id}', [SkillController::class, 'edit'])->name('edit-skill');
    Route::post('/updateskill', [SkillController::class, 'update'])->name('updateskill');
    Route::get('/delete-skill/{id}', [SkillController::class, 'destroy'])->name('delete-skill');
    
});
