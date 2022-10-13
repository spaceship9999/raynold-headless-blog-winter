<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        echo 1;
    });
});
