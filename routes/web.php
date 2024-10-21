<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ConstructorController;

// Our Module/Service
Route::view('/', 'module');

// Client Website
Route::view('/landing', 'welcome');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

// Redirect based on role
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth');
Route::get('/supplier/dashboard', [SupplierController::class, 'index'])->middleware('auth');
Route::get('/constructor/dashboard', [ConstructorController::class, 'index'])->middleware('auth');


// Vendor Portal
Route::view('/dashboard/vendor/registration', 'modules.vendor-portal.registration');
Route::view('/dashboard/vendor/profile', 'modules.vendor-portal.profile-management');
Route::view('/dashboard/vendor/invoice', 'modules.vendor-portal.invoice');

// Audit Management
Route::view('/dashboard/audit/checklist', 'modules.audit.checklist');
Route::view('/dashboard/audit/scheduling', 'modules.audit.scheduling');
Route::view('/dashboard/audit/reporting', 'modules.audit.reporting');

// Fleet Management
Route::view('/dashboard/fleet/vehicle-tracking', 'modules.fleet.vehicle-tracking');
Route::view('/dashboard/fleet/maintenance', 'modules.fleet.maintenance');
Route::view('/dashboard/fleet/fuel', 'modules.fleet.fuel');
