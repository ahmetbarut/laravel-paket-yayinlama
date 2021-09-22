<?php
// laravel-istanbul/package-development/routes/web.php

use Illuminate\Support\Facades\Route;

Route::prefix('posts')->group(function () {
    Route::get('all', [\ahmetbarut\PackageDevelopment\Http\Controllers\PostController::class, 'index']);
});
