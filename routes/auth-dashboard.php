<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\SearchHistoryController;

use App\Http\Controllers\PetContributorController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetDetailController;
use App\Http\Controllers\PetHealthController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Models\PetDetail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pet Contributor Dashboard Routes
|--------------------------------------------------------------------------
|
| Mengelola konten yang akan ditampilkan pada dashboard penyedia hewan.
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('pets')->group(function () {
        Route::get('/', [PetController::class, 'index'])->name('petcontributor.pets.index');
        Route::get('/create', [PetController::class, 'create'])->name('petcontributor.pets.create');
        Route::post('/store', [PetController::class, 'store'])->name('petcontributor.pets.store');
        Route::post('/store-all', [PetController::class, 'petCombined'])->name('petcontributor.pet-combined.store');
        Route::get('/{kd}', [PetController::class, 'show'])->name('pets.show');
        Route::get('{kd}/edit', [PetController::class, 'edit'])->name('petcontributor.pets.edit');
        Route::post('{kd}/update', [PetController::class, 'update'])->name('petcontributor.pets.update');
        Route::delete('{kd}/delete', [PetController::class, 'destroy'])->name('petcontributor.pets.destroy');
    });
    Route::prefix('petdetails')->group(function () {
        Route::get('{kd}/create', [PetDetailController::class, 'create'])->name('petcontributor.petdetails.create');
        Route::post('{kd}/store', [PetDetailController::class, 'store'])->name('petcontributor.petdetails.store');
        Route::get('{kd}/edit', [PetDetailController::class, 'edit'])->name('petcontributor.petdetails.edit');
        Route::post('{kd}/update', [PetDetailController::class, 'update'])->name('petcontributor.petdetails.update');
        Route::delete('{kd}/delete', [PetDetailController::class, 'destroy'])->name('petcontributor.petdetails.destroy');
    });
    Route::prefix('pethealths')->group(function () {
        Route::get('{kd}/create', [PetHealthController::class, 'create'])->name('petcontributor.pethealths.create');
        Route::post('{kd}/store', [PetHealthController::class, 'store'])->name('petcontributor.pethealths.store');
        Route::get('{kd}/edit', [PetHealthController::class, 'edit'])->name('petcontributor.pethealths.edit');
        Route::post('{kd}/update', [PetHealthController::class, 'update'])->name('petcontributor.pethealths.update');
        Route::delete('{kd}/delete', [PetHealthController::class, 'destroy'])->name('petcontributor.pethealths.destroy');
    });

    Route::prefix('free-adopt')->group(function () {
        Route::get('/', [DashboardController::class, 'freeadopt'])->name('freeadopt.index');
        // Route::post('{kd}/store', [PetHealthController::class, 'store'])->name('petcontributor.pethealths.store');
        // Route::get('{kd}/edit', [PetHealthController::class, 'edit'])->name('petcontributor.pethealths.edit');
        // Route::post('{kd}/update', [PetHealthController::class, 'update'])->name('petcontributor.pethealths.update');
        // Route::delete('{kd}/delete', [PetHealthController::class, 'destroy'])->name('petcontributor.pethealths.destroy');
    });

    Route::prefix('adoptions')->group(function () {
        // Route::get('/', [AdoptionController::class, 'index'])->name('petcontributor.adoptions.index');
        Route::post('/store', [AdoptionController::class, 'store'])->name('adoptions.store');
        Route::get('/success', [AdoptionController::class, 'success'])->name('adoptions.success');
        // Route::post('{id}/edit', [AdoptionController::class, 'show'])->name('petcontributor.adoptions.show');
        // Route::post('{id}/update', [AdoptionController::class, 'update'])->name('petcontributor.adoptions.update');
        // Route::delete('{id}/delete', [AdoptionController::class, 'destroy'])->name('petcontributor.adoptions.destroy');
    });
    Route::prefix('feedbacks')->group(function () {
        Route::get('/', [FeedbackController::class, 'index'])->name('petcontributor.feedbacks.index');
        Route::post('/store', [FeedbackController::class, 'store'])->name('petcontributor.feedbacks.store');
        Route::post('{id}/edit', [FeedbackController::class, 'show'])->name('petcontributor.feedbacks.show');
        Route::post('{id}/update', [FeedbackController::class, 'update'])->name('petcontributor.feedbacks.update');
        Route::delete('{id}/delete', [FeedbackController::class, 'destroy'])->name('petcontributor.feedbacks.destroy');
    });
});

