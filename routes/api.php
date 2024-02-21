<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});

Route::get('/users', function () {
    return UserResource::Collection(User::all());
});

Route::prefix('/destination')->group(function(){
    Route::get('/',  [DestinationController::class, 'index']);
    Route::get('/{id}', [DestinationController::class, 'show']);
    Route::get('/create', [DestinationController::class, 'create']);
    Route::post('/create', [DestinationController::class, 'store']);
    Route::get('/edit/{id}', [DestinationController::class, 'edit']);
    Route::patch('/update/{id}', [DestinationController::class, 'update']);
    Route::get('/delete/{id}', [DestinationController::class, 'delete']);
    Route::delete('/destroy/{id}', [DestinationController::class, 'destroy']);
});

Route::prefix('/crew')->group(function(){
    Route::get('/',  [CrewController::class, 'index']);
    Route::get('/{id}', [CrewController::class, 'show']);
    Route::get('/create', [CrewController::class, 'create']);
    Route::post('/create', [CrewController::class, 'store']);
    Route::get('/edit/{id}', [CrewController::class, 'edit']);
    Route::patch('/update/{id}', [CrewController::class, 'update']);
    Route::get('/delete/{id}', [CrewController::class, 'delete']);
    Route::delete('/destroy/{id}', [CrewController::class, 'destroy']);
});

Route::prefix('/technology')->group(function(){
    Route::get('/',  [TechnologyController::class, 'index']);
    Route::get('/{id}', [TechnologyController::class, 'show']);
    Route::get('/create', [TechnologyController::class, 'create']);
    Route::post('/create', [TechnologyController::class, 'store']);
    Route::get('/edit/{id}', [TechnologyController::class, 'edit']);
    Route::patch('/update/{id}', [TechnologyController::class, 'update']);
    Route::get('/delete/{id}', [TechnologyController::class, 'delete']);
    Route::delete('/destroy/{id}', [TechnologyController::class, 'destroy']);
});



