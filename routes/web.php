<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// login routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login.post');

// registration routes
Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::post('/registration', [AuthenticationController::class, 'registration'])->name('registration.post');

//dashboard route
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('admin.dashboard');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', function () {
    return view('about_me');
})->name('about');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/achievements', function () {
    return view('achievements');
})->name('achievements');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
