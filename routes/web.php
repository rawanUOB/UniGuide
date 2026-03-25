<?php
use App\Http\Controllers\UniController;
use Illuminate\Support\Facades\Route;


/* it says when someone visits / route them to the welcome 
 page which is in the view folder 
Route::get('/', function () {
    return view('home');
}); 
this is the first method **/

//this is with controller: 
Route::get('/', [UniController::class, 'index'])->name('home'); 

Route::get('/scholarships', function () {
    return view('scholarships');
})->name('scholarships');

Route::get('/academic-tests', function () {
    return view('academic');
})->name('academic-tests');
