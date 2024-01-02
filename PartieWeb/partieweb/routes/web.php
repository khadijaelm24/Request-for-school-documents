<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamerController;
use App\Http\Controllers\ReussiteController;
use App\Http\Controllers\scolariteController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\DemandeController;

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

//pour afficher la page d'acceuil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//pour acceder a la page de reclamations
Route::get('/reclamer',[ReclamerController::class,'reclamer'])->name('reclamer');
//pour l'envoi de la reclamation
Route::post('/reclamer',[ReclamerController::class,'reclamerPost'])->name('reclamer');

// //pour acceder a la page de demande d'attestation de reussite
// Route::get('/reussite',[ReussiteController::class,'reussite'])->name('reussite');
// //pour l'envoi de la demande d'attestation de reussite
// Route::post('/reussite',[ReussiteController::class,'reussitePost'])->name('reussite');

// //pour acceder a la page de demande de releve de notes
// Route::get('/releve',[ReleveController::class,'releve'])->name('releve');
// //pour l'envoi de la demande de releve de notes
// Route::post('/releve',[ReleveController::class,'relevePost'])->name('releve');
// //pour acceder a la page de demande d'attestation de scolarite
// Route::get('/scolarite',[ScolariteController::class,'scolarite'])->name('scolarite');
// //pour l'envoi de la demande d'attestation de scolarite
// Route::post('/scolarite',[ScolariteController::class,'scolaritePost'])->name('scolarite');
// //pour acceder a la page de demande de convention de stage
// Route::get('/convention',[ConventionController::class,'convention'])->name('convention');
// //pour l'envoi de la demande de convention de stage
// Route::post('/convention',[ConventionController::class,'ConventionPost'])->name('convention');


//pour l'envoi de la demande des documents
Route::get('/demande',[DemandeController::class,'demande'])->name('demande');
//pour l'envoi de la demande des documents
Route::post('/demande',[DemandeController::class,'demandePost'])->name('demande');

