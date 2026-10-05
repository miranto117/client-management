<?php

use App\Http\Controllers\ClientControleur;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

Route::resource('clients', ClientControleur::class);
