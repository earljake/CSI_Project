<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeeController;

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
    return view('landing');
});

Route::post('/register',[employeeController::class,'register']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[employeeController::class,'login']);

Route::get('/register', [employeeController::class, 'showRegistrationForm'])->name('register');

Route::post('/clientreg',[employeeController::class,'clientreg']);
Route::get('/login', [employeeController::class, 'showLoginForm'])->name('login');

Route::post('/table',[employeeController::class,'table'])->name('table');

Route::get('/table',[ShowController::class,'show']);


// routes/web.php
    
Route::get('/clientreg', [employeeController::class, 'showRegForm'])->name('clientreg');


Route::get('/clientregistration', [employeeController::class, 'showClientRegistrationForm'])->name('clientregistration');
Route::post('/clientregistration', [employeeController::class, 'clientregistration']);

Route::get('/landing', [employeeController::class, 'showLanding'])->name('landing');
Route::get('/marketing', [employeeController::class, 'showMarketing'])->name('marketing');
Route::post('/marketing',[employeeController::class,'marketing']);
Route::get('/home', [employeeController::class, 'showHome'])->name('home');
Route::post('/process-form', [employeeController::class, 'processForm']);

Route::get('/get-custom-id-by-company/{companyName}', [employeeController::class, 'getCustomIdByCompany']);
Route::get('/marketing', [employeeController::class, 'showMarketing'])->name('marketing');
Route::get('/get-custom-id-by-company/{companyName}', [employeeController::class, 'getCustomIdByCompany']);
Route::get('/get-custom-id-by-name/{companyName}', [employeeController::class, 'getCustomIdByName']);
// Route::get('/clientregistration/{company_name}', [UserController::class, 'getByCompanyName'])->name('company.show');
// Route::get('/clientregistrations/{name}', [UserController::class, 'getClientData']);
// Route::post('/marketing', [UserController::class, 'getCustomId'])->name('marketing');
// Route::post('/get-custom-id-by-client', [UserController::class, 'getCustomIdByClient'])->name('get.custom.id.by.client');
Route::get('/getCustomId', [employeeController::class, 'getCustomId'])->name('getCustomId');