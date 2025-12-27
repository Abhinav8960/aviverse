<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return 'Laravel is working!';
});

Route::get('/login', function (): RedirectResponse {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
