<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPackageController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\RechargeStockController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('theme-toggle', function () {
    if (session('theme')) {
        session()->forget('theme');
    } else {
        session(['theme' => 'dark']);
    }
    return back();
})->name('theme-toggle');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::redirect('/home', '/');

Route::middleware(['auth', 'update-last-login', 'permission:gerer users',])->group(function () {
    Route::resource("users", UserController::class);
    Route::post('users/{user_id}/roles', [UserController::class, 'storeRole'])->name('users.storeRole');
});
Route::middleware(['auth', 'update-last-login', 'permission:gerer roles'])->group(function () {
    Route::resource("roles", RoleController::class);
    Route::post('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.storePermissions');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/achat', [AchatController::class, 'index'])->name('achat');
Route::get('/confirmation/{id}', [ConfirmationController::class, 'index'])->name('confirmation');
Route::get('/mon-profile', [ProfilController::class, 'index'])->name('mon-profile');
Route::get('/rapport', [VenteController::class, 'index'])->name('rapport');
Route::resource('data-packages', DataPackageController::class);
Route::resource('recharge-stocks', RechargeStockController::class);
Route::get('/landing', function () {
    return view('landing.landing');
})->name('landing');
Route::redirect('/', '/landing')->name('home');
// Route::get('/forfaitAll', [DataPackageController::class, 'forfait'])->name('forfaitAll');


