<?php
use App\Http\Controllers\UniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ChatBotController;


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

Route::get('/university/{name}', [UniController::class, 'show'])->name('university.show');

Route::get('/college/{id}', [CollegeController::class, 'show'])->name('colleges.show');
Route::get('/major/{id}', [MajorController::class, 'show'])->name('majors.show');

Route::post('/chatbot', [ChatBotController::class, 'askDB']);
