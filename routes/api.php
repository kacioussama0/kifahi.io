<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/send-post',[\App\Http\Controllers\PostController::class,'sendPost']);
Route::get('/get-trends',[\App\Http\Controllers\PostController::class,'getTrends']);
