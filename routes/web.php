<?php

use App\Http\Controllers\employeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('clientreg');
});

Route::post('/register',[employeeController::class,'register']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[employeeController::class,'login']);

Route::get('/register', [employeeController::class, 'showRegistrationForm'])->name('register');

Route::post('/clientreg',[employeeController::class,'clientreg']);
<<<<<<< Updated upstream
=======

Route::get('/',[ShowController::class,'show']);

// routes/web.php

Route::get('/clientreg', [employeeController::class, 'showRegForm'])->name('clientreg');


>>>>>>> Stashed changes
