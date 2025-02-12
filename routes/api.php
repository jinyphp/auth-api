<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::middleware(['web','auth:sanctum'])
// ->name('api')
// ->prefix('/api')->group(function () {

//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });

// });

Route::get('/api/user', function (Request $request) {
    //dd($request->user());
    return $request->user();
})->middleware(['web', 'auth:sanctum']);

/**
 * API
 */
// Route::middleware(['web','guest'])
// ->name('api')
// ->prefix('/api')->group(function () {

//     // Route::post('/', [
//     //     \Jiny\Auth\Http\Controllers\Jwt\AuthLoginSession::class,
//     //     'session'])->name('.login.session');

//     Route::post('/login', [
//         \Jiny\Auth\API\Http\Controllers\Auth\LoginController::class,
//         'login']);

// });

