<?php
use App\Models\Image;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'mostrarImagens'])->name('welcome');
 

Route::get('/dashboard', [ImageController::class, 'galeria'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota para pagar a imagem.
Route::delete('/imagens/{id}', [ImageController::class, 'destroy'])->name('imagens.destroy');

// Recebe os dados do formulário para salvar uma nova imagem.
Route::post('/imagens', [ImageController::class, 'store'])->name('imagens.store');

require __DIR__.'/auth.php';
