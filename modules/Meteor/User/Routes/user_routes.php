<?php

use Illuminate\Support\Facades\Route;
use Meteor\User\Http\Controllers\ProfileController;

Route::middleware(['web'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require 'auth.php';