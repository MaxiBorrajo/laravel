<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api/users', [UserController::class, 'getAll'])->name("getAllUsers");

Route::get('api/users/:id', [UserController::class, 'getOne'])->name("getUser");

Route::post('api/users', [UserController::class, 'createOne'])->name("postUser");

Route::put('api/users/:id', [UserController::class, 'updateOne'])->name("updateUser");

Route::delete('api/users/:id', [UserController::class, 'deleteOne'])->name("deleteUser");

Route::get('api/clients', [ClientController::class, 'getAll'])->name("getAllClients");

Route::get('api/clients/:id', [ClientController::class, 'getOne'])->name("getClient");

Route::post('api/clients', [ClientController::class, 'createOne'])->name("postClient");

Route::put('api/clients/:id', [ClientController::class, 'updateOne'])->name("updateClient");

Route::delete('api/clients/:id', [ClientController::class, 'deleteOne'])->name("deleteClient");