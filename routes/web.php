<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;

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

// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login.post');

Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::post('/registration', [AuthenticationController::class, 'registration'])->name('registration.post');

// Admin routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Projects
    Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
    Route::get('/projects/create', [AdminController::class, 'projectsCreate'])->name('projects.create');
    Route::post('/projects', [AdminController::class, 'projectsStore'])->name('projects.store');
    Route::get('/projects/{id}/edit', [AdminController::class, 'projectsEdit'])->name('projects.edit');
    Route::put('/projects/{id}', [AdminController::class, 'projectsUpdate'])->name('projects.update');
    Route::delete('/projects/{id}', [AdminController::class, 'projectsDestroy'])->name('projects.destroy');
    
    // Skills
    Route::get('/skills', [AdminController::class, 'skills'])->name('skills');
    Route::get('/skills/create', [AdminController::class, 'skillsCreate'])->name('skills.create');
    Route::post('/skills', [AdminController::class, 'skillsStore'])->name('skills.store');
    Route::get('/skills/{id}/edit', [AdminController::class, 'skillsEdit'])->name('skills.edit');
    Route::put('/skills/{id}', [AdminController::class, 'skillsUpdate'])->name('skills.update');
    Route::delete('/skills/{id}', [AdminController::class, 'skillsDestroy'])->name('skills.destroy');
    
    // Educations
    Route::get('/educations', [AdminController::class, 'educations'])->name('educations');
    Route::get('/educations/create', [AdminController::class, 'educationsCreate'])->name('educations.create');
    Route::post('/educations', [AdminController::class, 'educationsStore'])->name('educations.store');
    Route::get('/educations/{id}/edit', [AdminController::class, 'educationsEdit'])->name('educations.edit');
    Route::put('/educations/{id}', [AdminController::class, 'educationsUpdate'])->name('educations.update');
    Route::delete('/educations/{id}', [AdminController::class, 'educationsDestroy'])->name('educations.destroy');
    
    // Experiences
    Route::get('/experiences', [AdminController::class, 'experiences'])->name('experiences');
    Route::get('/experiences/create', [AdminController::class, 'experiencesCreate'])->name('experiences.create');
    Route::post('/experiences', [AdminController::class, 'experiencesStore'])->name('experiences.store');
    Route::get('/experiences/{id}/edit', [AdminController::class, 'experiencesEdit'])->name('experiences.edit');
    Route::put('/experiences/{id}', [AdminController::class, 'experiencesUpdate'])->name('experiences.update');
    Route::delete('/experiences/{id}', [AdminController::class, 'experiencesDestroy'])->name('experiences.destroy');
    
    // Achievements
    Route::get('/achievements', [AdminController::class, 'achievements'])->name('achievements');
    Route::get('/achievements/create', [AdminController::class, 'achievementsCreate'])->name('achievements.create');
    Route::post('/achievements', [AdminController::class, 'achievementsStore'])->name('achievements.store');
    Route::get('/achievements/{id}/edit', [AdminController::class, 'achievementsEdit'])->name('achievements.edit');
    Route::put('/achievements/{id}', [AdminController::class, 'achievementsUpdate'])->name('achievements.update');
    Route::delete('/achievements/{id}', [AdminController::class, 'achievementsDestroy'])->name('achievements.destroy');
    
    // Personal Details
    Route::get('/personal-details', [AdminController::class, 'personalDetails'])->name('personal-details');
    Route::put('/personal-details', [AdminController::class, 'personalDetailsUpdate'])->name('personal-details.update');
    
    // Logout
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

// Public portfolio routes
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
