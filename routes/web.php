<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index1.app');
});

Route::get("/services", function (){
    return view('index1.services');
});
