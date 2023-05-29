<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[StudentsController::class, 'index']);
Route::get('/students/create',[StudentsController::class, 'create']);
Route::resource('/students', StudentsController::class);
Route::get('/students/{id}', [StudentsController::class,'show']);
Route::get('/students/{id}/edit', [StudentsController::class,'edit']);

