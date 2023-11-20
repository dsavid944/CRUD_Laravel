<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


// Ahora CategoryController está correctamente importado
Route::resource('categories', CategoryController::class);
