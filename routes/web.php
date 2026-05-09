<?php
use App\Http\Controllers\UniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\AIController;
use App\Http\Controllers\AcademicController;

/* it says when someone visits / route them to the welcome
page which is in the view folder
Route::get('/', function () {
    return view('home');
});
this is the first method **/

//this is with controller:
Route::get('/', [UniController::class, 'index'])->name('home');

Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships');

// for the details page
Route::get('/scholarships/{scholarship}', [ScholarshipController::class, 'show'])->name('scholarships.show');

Route::get('/university/{name}', [UniController::class, 'show'])->name('university.show');

Route::get('/college/{id}', [CollegeController::class, 'show'])->name('colleges.show');
Route::get('/major/{id}', [MajorController::class, 'show'])->name('majors.show');

Route::post('/chatbot', [ChatBotController::class, 'askDB']);
Route::get('/academic-tests', [AcademicController::class, 'index'])->name('academic-tests');
Route::post('/predict', [AIController::class, 'predict'])->name('ai.predict');
Route::get('/questionnaire', [AIController::class, 'show'])->name('ai.questionnaire');
Route::post('/feedback', [AIController::class, 'feedback'])->name('ai.feedback');

