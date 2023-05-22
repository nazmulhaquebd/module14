<?php

use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/user',[StoreController::class,'storeuser']);
Route::post('/useragent',[StoreController::class,'UserAgent']);
Route::get('/pagequery',[StoreController::class,'endpoint']);
Route::get('/responsejson',[StoreController::class,'json']);
Route::post('/fileupload',[StoreController::class,'uploadAvatar']);
Route::post('/setcookie',[StoreController::class,'SetCookie']);

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return response()->json($response);
});

