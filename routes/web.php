<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    Redis::set('redis_test', "Hello world");

    return Redis::get('redis_test');
});
