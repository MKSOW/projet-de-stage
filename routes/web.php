<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetiteEntrepriseController ;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Projets de stages Sympa_jira
Route::resource('PetiteEntreprise',PetiteEntrepriseController::class);
Route::resource('Utilisateur',UtilisateurController::class);
Route::resource('Projets',ProjetsController::class);
Route::resource('Taches',TachesController::class);
Route::resource('TypeTaches',TypeTachesController::class);
Route::resource('EtatTaches',EtatTachesController::class);


require __DIR__.'/auth.php';
