<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
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
    return view('auth.login');
});

Route::get("/dashboard", DashboardController::class)->middleware('auth')->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get("logout", 'logout')->name("admin.logout");
    });
    Route::controller(AdminProfileController::class)->group(function(){
        Route::get('profile', 'index')->name('admin.profile');
        Route::post('profile/store', 'store')->name('admin.profile.store');
        Route::get('profile/update-password', 'upDatePasswordView')->name('admin.updatePassword.view');
        Route::post('profile/update-password', 'updatePasswordStore')->name('admin.updatePassword.post');
    });
});


Route::middleware(['auth', 'role:instructor'])->group(function () {
    Route::prefix('instructor')->controller(InstructorController::class)->group(function () {
        Route::get('dashboard', 'index')->name('instructor.dashboard');
        
    });
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('dashboard', 'index')->name('user.dashboard');
    });
});


require __DIR__ . '/auth.php';
