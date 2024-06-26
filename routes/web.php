<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {return view('register');});

Route::post('/register', [userController::class, 'createUser'])->name('register');

Route::get('/login', function () {return view('login');})->name('login'); 

Route::post('/login', [userController::class, 'login'])->name('login');

Route::get('/homepage/{userID}', [UserController::class, 'showUserDetails'])->name('homepage');

