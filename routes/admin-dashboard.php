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

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| Mengelola konten yang akan ditampilkan pada dashboard admin.
|
*/

Route::middleware(['auth', 'admin'])->prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::post('{id}/edit', [UserController::class, 'show'])->name('users.show');
    Route::post('{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('useraddresses')->group(function () {
    Route::get('/', [UserAddressController::class, 'index'])->name('useraddresses.index');
    Route::get('/create', [UserAddressController::class, 'create'])->name('useraddresses.create');
    Route::post('/store', [UserAddressController::class, 'store'])->name('useraddresses.store');
    Route::post('{kd}/edit', [UserAddressController::class, 'show'])->name('useraddresses.edit');
    Route::post('{kd}/update', [UserAddressController::class, 'update'])->name('useraddresses.update');
    Route::delete('{kd}/delete', [UserAddressController::class, 'destroy'])->name('useraddresses.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('favorits')->group(function () {
    Route::get('/', [FavoritController::class, 'index'])->name('favorits.index');
    Route::delete('{kd}/delete', [FavoritController::class, 'destroy'])->name('favorits.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('searchhistories')->group(function () {
    Route::get('/', [SearchHistoryController::class, 'index'])->name('searchhistories.index');
    Route::delete('{kd}/delete', [SearchHistoryController::class, 'destroy'])->name('searchhistories.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('petcontributors')->group(function () {
    Route::get('/', [PetContributorController::class, 'index'])->name('petcontributors.index');
    Route::get('/create', [PetContributorController::class, 'create'])->name('petcontributors.create');
    Route::post('/store', [PetContributorController::class, 'store'])->name('petcontributors.store');
    Route::post('{kd}/edit', [PetContributorController::class, 'show'])->name('petcontributors.edit');
    Route::post('{kd}/update',  [PetContributorController::class, 'update'])->name('petcontributors.update');
    Route::delete('{kd}/delete', [PetContributorController::class, 'destroy'])->name('petcontributors.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('pets')->group(function () {
    Route::get('/', [PetController::class, 'index'])->name('pets.index');
    Route::get('/export', [PetController::class, 'export'])->name('pets.export');
    Route::post('/store', [PetController::class, 'store'])->name('pets.store');
    Route::post('{kd}/edit', [PetController::class, 'show'])->name('pets.show');
    Route::post('{kd}/update', [PetController::class, 'update'])->name('pets.updte');
    Route::delete('{kd}/delete', [PetController::class, 'destroy'])->name('pets.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('petdetails')->group(function () {
    Route::get('/', [PetDetailController::class, 'index'])->name('petdetails.index');
    Route::post('/store', [PetDetailController::class, 'store'])->name('petdetails.store');
    Route::post('{kd}/edit', [PetDetailController::class, 'show'])->name('petdetails.show');
    Route::post('{kd}/update', [PetDetailController::class, 'update'])->name('petdetails.update');
    Route::delete('{kd}/delete', [PetDetailController::class, 'destroy'])->name('petdetails.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('pethealths')->group(function () {
    Route::get('/', [PetHealthController::class, 'index'])->name('pethealths.index');
    Route::post('/store', [PetHealthController::class, 'store'])->name('pethealths.store');
    Route::post('{kd}/edit', [PetHealthController::class, 'show'])->name('pethealths.show');
    Route::post('{kd}/update', [PetHealthController::class, 'update'])->name('pethealths.update');
    Route::delete('{kd}/delete', [PetHealthController::class, 'destroy'])->name('pethealths.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('adoptions')->group(function () {
    Route::get('/', [AdoptionController::class, 'index'])->name('adoptions.index');
    Route::get('/export', [AdoptionController::class, 'export'])->name('adoptions.export');
    Route::post('/store', [AdoptionController::class, 'store'])->name('adoptions.store');
    Route::post('{id}/edit', [AdoptionController::class, 'show'])->name('adoptions.show');
    Route::post('{id}/update', [AdoptionController::class, 'update'])->name('adoptions.update');
    Route::delete('{id}/delete', [AdoptionController::class, 'destroy'])->name('adoptions.destroy');
});

