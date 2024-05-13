<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\IsResponsable;




Route::get('/', function () {
    return view('login');
})->name('Rlogin');

Route::post('/login',[LoginController::class,'login'])->name('login');




Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/dashboard_per', function () {
    return view('espace_per.dashbord_per');
})->name('dashboard_per');


Route::get('/logout',[logincontroller::class,'logout'])->name('logout');


Route::get('/employes_show', function () {
    return view('employes_show');
})->name('employes_show');

Route::get('/employes_add', function () {
    return view('employes_add');
})->name('employes_add');

Route::get('/stageaires_show', function () {
    return view('stageaires_show');
})->name('stageaires_show');

Route::get('/stageaires_add', function () {
    return view('stageaires_add');
})->name('stageaires_add');

Route::get('/formation', function () {
    return view('formation');
})->name('formation');

Route::get('/conge', function () {
    return view('conge');
})->name('conge');
