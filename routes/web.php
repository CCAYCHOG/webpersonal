<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

$theme = 'charcoal'; // obsidian | slate | cyber | luxury

Route::get('/', function () use ($theme) {
    return view('home', compact('theme'));
})->name('home');

Route::get('/cv', function () use ($theme) {
    return view('cv', compact('theme'));
})->name('cv');

Route::get('/proyectos', function () use ($theme) {
    return view('proyectos', compact('theme'));
})->name('proyectos');

Route::get('/servicios', function () use ($theme) {
    return view('servicios', compact('theme'));
})->name('servicios');

Route::get('/contacto', [ContactController::class, 'show'])->name('contacto');
Route::post('/contacto', [ContactController::class, 'send'])->name('contacto.send');