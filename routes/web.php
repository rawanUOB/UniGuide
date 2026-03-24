<?php

use Illuminate\Support\Facades\Route;

//it says when someone visits / route them to the welcome 
// page which is in the view folder
Route::get('/', function () {
    return view('home');
});
