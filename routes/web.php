<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPackageController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RechargeCompteController;
use App\Http\Controllers\RechargeStockController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::get('/vente', [DashboardController::class, 'rapport'])->name('vente');
Route::get('/achat', [AchatController::class, 'index'])->name('achat');
Route::get('/confirmation/{id}', [ConfirmationController::class, 'index'])->name('confirmation');
Route::get('/mon-profile', [ProfilController::class, 'index'])->name('mon-profile');
Route::resource('/transactions', TransactionController::class);
Route::resource('data-packages', DataPackageController::class);
Route::resource('recharge-stocks', RechargeStockController::class);
Route::get('/landing', function () {
    return view('landing.landing');
})->name('landing');
Route::redirect('/', '/landing')->name('home');

Route::post('rechargeVolume', [RechargeStockController::class, 'rechargeVolume'])->name('rechargeVolume');

Route::resource('recharge-comptes', RechargeCompteController::class);

//les routes de la page profil
Route::get('/mon-profil', [ProfilController::class, 'index'])->name('mon-profil');
Route::put('/profil', [ProfilController::class, 'updateProfil'])->name('profil.update');
Route::put('/profil/change-password', [ProfilController::class, 'updatePassword'])->name('profil.password.update');
Route::post('/profil/logout-other-sessions', [ProfilController::class, 'logoutOtherSessions'])->name('logout.other.sessions');
Route::delete('/profil/delete-account', [ProfilController::class, 'destroy'])->name('account.delete');
Route::post('/user/update-image', [UserController::class, 'updateImage'])->name('user.updateImage');


Route::get('/login/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

