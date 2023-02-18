<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    $token = User::firstOrFail()
        ->createToken('auth_token')
        ->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
    ]);
})->name('login');
