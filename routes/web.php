<?php
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DriverOfficerController;

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/SuperAdmin', [SuperAdminController::class, 'Superadmin'])->name('SuperAdmin.superAdmin');
    Route::patch('/Students', [StudentController::class, 'Student'])->name('Students.student');
    Route::delete('/Driverofficer', [DriverOfficerController::class, 'Driverofficer'])->name('Driverofficer.driverofficer');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
