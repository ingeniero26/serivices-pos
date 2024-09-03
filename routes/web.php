<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('admin/profile',[AdminController::class, 'admin_profile']);
    Route::post('admin_profile/update',[AdminController::class, 'update']);

    Route::get('admin/users',[AdminController::class, 'admin_users']);
    Route::get('admin/users/view/{id}',[AdminController::class, 'admin_users_view']);

    //categorias
    Route::get('admin/category',[CategoryController::class, 'list']);

    //email
    Route::get('admin/email/compose',[EmailController::class, 'email_compose']);
    Route::post('admin/email/compose_post',[EmailController::class, 'compose_post']);
    Route::get('admin/email/sent_email',[EmailController::class, 'sent_email']);

    Route::get('admin/sent_email',[EmailController::class, 'sent_email_delete']);
    Route::get('admin/email/read/{id}',[EmailController::class, 'read_email']);
    Route::get('admin/email/read_delete/{id}',[EmailController::class, 'read_delete']);


});
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
});


Route::get('admin/login',
[AdminController::class, 'AdminLogin'])->name('admin.login');
