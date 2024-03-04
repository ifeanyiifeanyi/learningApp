<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Instructor\ProfileController as InstructorProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProfileController;
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


Route::prefix('instructor')->middleware(['auth', 'role:instructor'])->group(function () {
    Route::controller(InstructorController::class)->group(function () {
        Route::get('dashboard', 'index')->name('instructor.dashboard');
        // Route::get('profile', 'index')->name('instructor.dashboard');
        Route::get("logout", 'logout')->name("instructor.logout");
    });

    Route::controller(InstructorProfileController::class)->group(function () {
        Route::get('profile/view', 'index')->name('instructor.profile.view');
        Route::post('profile/store', 'store')->name('instructor.profile.store');

        Route::get('profile/update-password', 'updatePasswordView')->name('instructor.updatePassword.view');
        Route::post('profile/update-password/update', 'updatePasswordStore')->name('instructor.updatePassword.store');
    });
});
Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('dashboard', 'index')->name('user.dashboard');
        Route::get('logout', 'logout')->name('user.logout');
    });

    Route::controller(UserProfileController::class)->group(function(){
        Route::get('profile/view', 'index')->name('user.profile.view');
        Route::get('profile/update', 'update')->name('user.profile.update');
        Route::post('profile/store','store')->name('user.profile.store');
    });

});


require __DIR__ . '/auth.php';
