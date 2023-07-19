<?php

use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Models\Document;

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

 Route::get('/voirTous', function () {
     $document = Document::all();
     return view('user.voirTous', compact('document'));
 });

Route::get('/', [HomeController::class, 'index']);
Route::get('/tableauDeBord', [HomeController::class, 'chart']);

 Route::get('/home', [HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/archive-demandes', [AdminController::class, 'archive']);
Route::get('/liste-demandes', [AdminController::class, 'liste']);
Route::get('auth/google', [GoogleController::class, 'googlepage']);

Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);

Route::get('/add_document_view', [AdminController::class, 'addview']);

Route::post('/upload_document', [AdminController::class, 'upload']);

Route::get('/faireDemande', [DemandeController::class, 'faireDemande']);
Route::get('/faireDemande1', [DemandeController::class, 'faireDemande1']);
Route::get('/faireDemande2', [DemandeController::class, 'faireDemande2']);

Route::get('/mesDemandes', [DemandeController::class, 'mesDemandes']);

Route::post('/add_demande', [DemandeController::class, 'store']);
Route::post('/delete/{id}', [DemandeController::class, 'delete']);

Route::get('/showdemand', [AdminController::class, 'showdemand']);

Route::get('/valide/{id}', [AdminController::class, 'valide']);
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);
Route::get('/pret/{id}', [AdminController::class, 'pret']);

Route::get('/showdocument', [AdminController::class, 'showdocument']);

Route::get('/deletedocument/{id}', [AdminController::class, 'deletedocument']);

Route::get('/updatedocument/{id}', [AdminController::class, 'updatedocument']);

Route::post('/editdocument/{id}', [AdminController::class, 'editdocument']);

Route::get('/showuser', [AdminController::class, 'showuser']);


