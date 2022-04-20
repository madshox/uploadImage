<?php

use Illuminate\Support\Facades\Route;

Route::post('/upload', [\Madshox\UploadImages\Controllers\UploadImageController::class, 'uploadImage']);
