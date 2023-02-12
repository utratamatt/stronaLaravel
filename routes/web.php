<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StronaGlownaController;
use App\Http\Controllers\InternalEventsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LaczenieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', StronaGlownaController::class);
Route::get('/wydarzenia-wewnetrzne', [InternalEventsController::class, 'index']);
Route::get('/wydarzenia-wewnetrzne/edycja/{id}', [InternalEventsController::class, 'edit']);
Route::post('/wydarzenia-wewnetrzne/aktualizacja/{id}', [InternalEventsController::class, 'update']);
Route::get('/wydarzenia-wewnetrzne/nowy', [InternalEventsController::class, 'create']);
Route::post('/wydarzenia-wewnetrzne/dodawanie', [InternalEventsController::class, 'addToDB']);
Route::get('/wydarzenia-wewnetrzne/usun/{id}', [InternalEventsController::class, 'delete']);

Route::get('/posty', [PostsController::class, 'index']);
Route::get('/posty/edycja/{id}', [PostsController::class, 'edit']);
Route::post('/posty/aktualizacja/{id}', [PostsController::class, 'update']);
Route::get('/posty/nowy', [PostsController::class, 'create']);
Route::post('/posty/dodawanie', [PostsController::class, 'addToDB']);
Route::get('/posty/usun/{id}', [PostsController::class, 'delete']);

Route::get('/laczenie', [LaczenieController::class, 'index']);
Route::get('/laczenie/edycja/{id}', [LaczenieController::class, 'edit']);
Route::post('/laczenie/aktualizacja/{id}', [LaczenieController::class, 'update']);
Route::get('/laczenie/nowy', [LaczenieController::class, 'create']);
Route::post('/laczenie/dodawanie', [LaczenieController::class, 'addToDB']);
Route::get('/laczenie/usun/{id}', [LaczenieController::class, 'delete']);
