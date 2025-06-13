<?php

use App\Http\Controllers\ClienteInteresadoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//

Route::view("/", "home")->name("home");
Route::view("/nosotros", "about")->name("about");
Route::view("/terminos", "terminos")->name("terminos");
Route::view("/contacto", "contacto")->name("contacto");
Route::post("/formulario",[ClienteInteresadoController::class, "store"])->name("formulario");
Route::view("/error", "error404")->name("error404");





Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
