<?php

use Illuminate\Support\Facades\Route;

#Route::get('/', function () {    return view('welcome');});



use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('chat');
});

Route::post('/chat/send-message', [ChatController::class, 'store'])->name('chat.send');
