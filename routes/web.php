<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/read', [PostController::class, 'read']);
Route::get('/find', [PostController::class, 'find']);
Route::get('/updatespecificid', [PostController::class, 'updatespecificid']);
Route::get('/save', [PostController::class, 'save']);
Route::get('/update', [PostController::class, 'update']);
Route::get('/delete', [PostController::class, 'delete']);
Route::get('/mass_assignment', [PostController::class, 'mass_assignment']);
Route::get('/contact', [PostController::class, 'contact']);
Route::get('/about/{id}/{name}/{password}', [PostController::class, 'about']);
