<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'home']);
Route::get('/search', [RecipeController::class, 'search']);
Route::post('/save', [RecipeController::class, 'save']);
Route::get('/saved', [RecipeController::class, 'saved']);
