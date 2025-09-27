<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::post('/admin/deploy',[AdminController::class, "deploy"]);