<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('statiques.accueil', ['titre' => 'Accueil']);
})->name('accueil');

Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games', [GameController::class, 'store'])->name('games.store');
Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('games.destroy');
Route::get('/games/{id}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{id}', [GameController::class, 'update'])->name('games.update');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
