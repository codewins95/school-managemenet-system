<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'loginPage'])->name('login');
Route::post('login', [LoginController::class, 'loginAuth'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('forget-password', [LoginController::class, 'forgetPassword'])->name('forget.password');
Route::post('forget-password', [LoginController::class, 'PostforgetPassword'])->name('forget.post');
Route::get('password-reset/{token}', [LoginController::class, 'resetPassword'])->name('login.reset');
Route::post('password-reset/{token}', [LoginController::class, 'resetPost'])->name('login.reset.post');


Route::group(['middleware' => ['auth', 'admin'],'prefix'=>'admin','as'=>'admin.'],function () {
    Route::get('/dashboard', [DashboardController::class,'AdminDashboard'])->name('dashboard');
    Route::prefix('users')->name('user.')->group(function () {
        Route::get('list/{user}', [UserController::class, 'index'])->name('list');
    });
});


Route::group(['middleware' => ['auth', 'teacher'],'prefix'=>'teacher','as'=>'teacher.'],function () {
    Route::get('/dashboard', [DashboardController::class,'TeacherDashboard'])->name('dashboard');
});


Route::group(['middleware' => ['auth', 'student'],'prefix'=>'student','as'=>'student.'],function () {
    Route::get('/dashboard', [DashboardController::class,'StudentDashboard'])->name('dashboard');
});


Route::group(['middleware' => ['auth', 'parent'], 'prefix' => 'parent', 'as' => 'parent.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'ParentDashboard'])->name('dashboard');
});
