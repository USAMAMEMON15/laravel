<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usama', function () {
    return view('usama');
});

route::post("/register" ,[usercontroller::class ,'register']);

route::post("/logout" ,[usercontroller::class ,'logout']);
route::post("/login" ,[usercontroller::class ,'login']);



