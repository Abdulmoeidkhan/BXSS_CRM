<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\UserUpdateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
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

Route::get('/signIn', function () {
    return view('welcome');
})->name('signIn');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('/', [DashboardController::class, 'dashBoardRender'])->middleware('auth')->name("home");
Route::get('/userPanel', [UserPanelController::class, 'renderUserPanel'])->middleware('auth')->name("userPanel");

//Google
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
//Facebook
Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
//Github
Route::get('/login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [LoginController::class, 'handleGithubCallback']);
Route::get('/status/{userId}/{action}', [UserUpdateController::class, 'statusChanger'])->name('request.userStatusUpdate')->whereNumber('action',"userId");


// Custom Login
Route::post('/loginReq', [LoginController::class, 'customLogin'])->name('request.login');
Route::post('/signUpReq', [SignUpController::class, 'signUp'])->name('request.signUp');
