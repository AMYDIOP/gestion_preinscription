<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FilliereController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\PreInscriptionController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\ProgrammeController;
use App\Http\Controllers\Admin\DepartementController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/dashboard', function () {
  
    return view("pages.dashboard");
})->name('dashboard')->middleware('auth');


Route::get('/users', function () {

    return view("pages.users");
})->middleware('auth');


Route::get('/login', function () {

    return view("pages.auth.login");
})->name('login');


Route::get('/forgot', function () { 

    return view("pages.auth.forgot");
})->middleware('auth');

Route::get('/register', function () { 

    return view("pages.auth.register");
})->middleware('auth');

Route::post('/auth/login',[AuthController ::class,'authenticate']);
Route::post('/auth/logout',[AuthController ::class,'logout']);
Route::get('/auth/signup',[AuthController ::class,'signupForm']);
Route::post('/auth/signup',[AuthController ::class,'signup']);

Route::get('/presentation', [PresentationController::class, 'index'])->name('presentation');
Route::get('/campus', [CampusController::class, 'index'])->name('campus');
Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/preinscriptions', [PreInscriptionController::class, 'index'])->name('preinscriptions');

// Route pour afficher le formulaire de préinscription
Route::get('/preinscription', [PreinscriptionController::class, 'showForm'])->name('preinscription');
// Route pour traiter la soumission du formulaire
Route::post('/preinscription', [PreInscriptionController::class, 'submit'])->name('preinscription.submit');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboarde', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('programmes', ProgrammeController::class);
    Route::resource('departements', DepartementController::class);
    Route::resource('admissions', AdmissionController::class);
});

