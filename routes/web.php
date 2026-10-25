<?php
use App\Http\Controllers\ParticipantController;

Route::get('/', [ParticipantController::class, 'showForm'])->name('register');
Route::post('/register', [ParticipantController::class, 'store'])->name('participant.store');
Route::get('/info-perjalanan', [ParticipantController::class, 'showContent'])->name('content.show');
Route::get('/logout', [ParticipantController::class, 'logout'])->name('logout');
