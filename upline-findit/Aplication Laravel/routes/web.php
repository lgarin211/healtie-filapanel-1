<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Newpower;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UshController;
use App\Http\Controllers\SleepController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\QuizController;

// MVP
Route::get('/', function () {
    return view('welcome');
});


Route::get('/heltieF',[UshController::class,'Healti_food'])->name("heltieF");

Route::get('/EditProfile',[UshController::class,'EditProfile'])->name("EditProfile");

// addprogreswatter
Route::get('/addprogreswatter',[UshController::class,'addprogreswatter'])->name("addprogreswatter");


// Route::any('/Goals', function (Request $request) {
//     dump($request);
//     return view('Componen.Goals');
// })->name("Goals");

Route::any('/Goals', [UshController::class,'Goals'])->name("Goals");
Route::any('/logout', [UshController::class,'logout'])->name("logout");

Route::get('/KebutuhanTidur', function() {
    return view('Componen.KebutuhanTidur');
});

Route::get('/MealInfo', function() {
    return view('Componen.Meal_info');
});

Route::get('/notification', function() {
    return view('Componen.Notification');
});

Route::get('/profile', [Newpower::class, 'profile'])->name("profile");

Route::get('/recipe', function() {
    return view('Componen.Recipe');
});

Route::get('/recommendation', [RecommendationController::class, 'recommendation'])->name('recommendation');

Route::any('/register', [UshController::class,'Register'])->name("register");

Route::get('/tambah_data_tidur', [SleepController::class, 'sleepTrack'])->name('tambah_data_tidur');
Route::post('/tambah_data_tidur', [SleepController::class, 'addsleepTrack'])->name('aad_tambah_data_tidur');


Route::get('/score', function (){
    return view('Componen.ScoreStressMeter');
});

Route::get('/quiz', [QuizController::class, 'showQuiz'])->name("quiz");

Route::any('/newfood', [BarcodeController::class,'Newfood'])->name("newfood");

Route::get('/workout', [UshController::class,'workout'])->name("workout");

Route::any('/login', [UshController::class, 'login'])->name("login");



Route::any("home", [UshController::class,'home'])->name("home");
