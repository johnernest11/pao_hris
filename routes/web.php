<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InsertExcelController;
use App\Http\Controllers\UpdateExcelController;
use App\Http\Controllers\StaffAccountController;
use App\Http\Controllers\LawyerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login',
        [CustomAuthController::class,'login'])->middleware('alreadyLoggedIn')->middleware('prevent-back-history')->name('login');
Route::get('/forgot-password', 
        [CustomAuthController::class,'forgot_passsword'])->middleware('guest')->name('password.email');
Route::get('/registration',
        [CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',
        [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',
        [CustomAuthController::class,'loginUser'])->name('login-user');
Route::post('/forgot-password', 
        [CustomAuthController::class,'forgot_passsword_request'])->middleware('guest')->name('password.request');



Route::get('/reset/{token}',
        [CustomAuthController::class,'showResetForm'])->name('reset.password.form');



Route::post('/reset',
        [CustomAuthController::class,'resetPassword'])->name('reset.password');



        
Route::get('/logout',
        [CustomAuthController::class,'logout'])->middleware('prevent-back-history');

Route::get('/dashboard',
        [DashboardController::class,'dashboard'])->middleware('prevent-back-history')->middleware('isLoggedIn');

Route::post('/employee',
        [InsertExcelController::class,'InsertExcel'])->name('insert-excel');
Route::get('/employee',
        [EmployeeController::class,'employee'])->middleware('isLoggedIn')->middleware('prevent-back-history');









Route::get('/softdelete/{Id}',
        [EmployeeController::class,'Softdeleteee']);











Route::get('/Individual-Record',
        [EmployeeController::class,'IndividualRecord'])->middleware('isLoggedIn')->middleware('prevent-back-history');
Route::get('/Personal-Data-Sheet/{slug}',
        [EmployeeController::class,'PDS_view'])->middleware('isLoggedIn')->middleware('prevent-back-history')->name('UpdatedPDS');

Route::post('/Personal-Data-Sheet/',
        [UpdateExcelController::class,'UpdateExcel'])->name('update-excel1');
// Route::post('/Personal-Data-Sheet/',
    //[UpdateExcelController::class,'Update'])->name('update-LGBTQ');
Route::get('/Staff',
        [StaffAccountController::class,'staff'])->middleware('isLoggedIn')->middleware('prevent-back-history');

Route::get('/Lawyer',
        [LawyerController::class,'lawyer'])->middleware('isLoggedIn')->middleware('prevent-back-history');
Route::get('/Lawyer-profile',
        [LawyerController::class,'lawyer_profile'])->middleware('isLoggedIn')->middleware('prevent-back-history');