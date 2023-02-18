<?php

use App\Http\Controllers\Api\Invoices\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('invoices')
    ->as('.invoices')
    ->middleware('auth:sanctum')
    ->group(static function (): void {
        Route::get('/', IndexController::class)
            ->name('index');
    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
