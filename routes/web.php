<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\PetContributorAuthController;
// use App\Http\Controllers\PetContributorDashboardController;
use App\Http\Controllers\PetContributorController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetDetailController;
use App\Http\Controllers\PetHealthController;
use App\Http\Controllers\PetPhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\SearchHistoryController;
use App\Http\Controllers\ProfileController;
use App\Models\SearchHistory;
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

Route::prefix('latihan')->group(function () {
    Route::get('/1', function () {
        return view('firstlatihan');
    });
    Route::get('/2', function () {
        return view('secondlatihan');
    });
    Route::get('/3', function () {
        return view('signin');
    });
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth', 'admin'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth', 'admin'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth', 'admin'])->name('buttons.text-icon');


Route::get('/404', function () {
    return view('error');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/petcontributor/dashboard', function () {
    return view('petcontributor.dashboard');
})->middleware(['auth:petcontributor'])->name('petcontributor.dashboard');


// Route::middleware('auth:petcontributor')->prefix('petcontributor')->group(function () {
Route::group(['middleware'=>['auth:petcontributor'], 'prefix'=>'petcontributor', 'as'=>'petcontributor.'], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::group(['prefix' => 'petcontributor'], function () {
    // Route::get('/login', [PetContributorAuthController::class, 'showLoginForm'])->name('petcontributor.login');
    // Route::post('/login', [PetContributorAuthController::class, 'login']);
    // Route::get('/register', [PetContributorAuthController::class, 'showRegistrationForm'])->name('petcontributor.register');
    // Route::post('/register', [PetContributorAuthController::class, 'register']);
    // Route::get('/logout', [PetContributorAuthController::class, 'logout']);
// });

require __DIR__ . '/petcontributorauth.php';
require __DIR__ . '/auth.php';

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/store', [UserController::class, 'store']);
    Route::post('{id}/edit', [UserController::class, 'show']);
    Route::post('{id}/update', [UserController::class, 'update']);
    Route::delete('{id}/delete', [UserController::class, 'destroy']);
});
Route::prefix('useraddress')->group(function () {
    Route::post('/', [UserAddressController::class, 'index']);
    Route::post('/store', [UserAddressController::class, 'store']);
    Route::post('{kd}/edit', [UserAddressController::class, 'show']);
    Route::post('{kd}/update', [UserAddressController::class, 'update']);
    Route::delete('{kd}/delete', [UserAddressController::class, 'destroy']);
});

Route::prefix('pet')->group(function () {
    Route::post('/', [PetController::class, 'index']);
    Route::post('/store', [PetController::class, 'store']);
    Route::post('{kd}/edit', [PetController::class, 'show']);
    Route::post('{kd}/update', [PetController::class, 'update']);
    Route::delete('{kd}/delete', [PetController::class, 'destroy']);
});
Route::prefix('petdetail')->group(function () {
    Route::post('/', [PetDetailController::class, 'index']);
    Route::post('/store', [PetDetailController::class, 'store']);
    Route::post('{kd}/edit', [PetDetailController::class, 'show']);
    Route::post('{kd}/update', [PetDetailController::class, 'update']);
    Route::delete('{kd}/delete', [PetDetailController::class, 'destroy']);
});
Route::prefix('pethealth')->group(function () {
    Route::post('/', [PetHealthController::class, 'index']);
    Route::post('/store', [PetHealthController::class, 'store']);
    Route::post('{kd}/edit', [PetHealthController::class, 'show']);
    Route::post('{kd}/update', [PetHealthController::class, 'update']);
    Route::delete('{kd}/delete', [PetHealthController::class, 'destroy']);
});
Route::prefix('petphoto')->group(function () {
    Route::post('/', [PetPhotoController::class, 'index']);
    Route::post('/store', [PetPhotoController::class, 'store']);
    Route::post('{kd}/edit', [PetPhotoController::class, 'show']);
    Route::post('{kd}/update', [PetPhotoController::class, 'update']);
    Route::delete('{kd}/delete', [PetPhotoController::class, 'destroy']);
});

Route::prefix('petcontributor')->group(function () {
    Route::post('/', [PetContributorController::class, 'index']);
    Route::post('/store', [PetContributorController::class, 'store']);
    Route::post('{id}/edit', [PetContributorController::class, 'show']);
    Route::post('{id}/update', [PetContributorController::class, 'update']);
    Route::delete('{id}/delete', [PetContributorController::class, 'destroy']);
});

Route::prefix('adoption')->group(function () {
    Route::post('/', [AdoptionController::class, 'index']);
    Route::post('/store', [AdoptionController::class, 'store']);
    Route::post('{id}/edit', [AdoptionController::class, 'show']);
    Route::post('{id}/update', [AdoptionController::class, 'update']);
    Route::delete('{id}/delete', [AdoptionController::class, 'destroy']);
});

Route::prefix('searchhistory')->group(function () {
    Route::post('/', [SearchHistoryController::class, 'index']);
    Route::post('/store', [SearchHistoryController::class, 'store']);
    Route::delete('{id}/delete', [SearchHistoryController::class, 'destroy']);
});
