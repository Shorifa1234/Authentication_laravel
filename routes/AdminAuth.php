<?php

use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    

    Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
                ->name('admin.login');

    Route::post('adminlogin', [AdminAuthenticatedSessionController::class, 'store']);

    

    
});

Route::middleware('auth')->group(function () {
    
    Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});
