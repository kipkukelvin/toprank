<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ApplicationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/academic/faqs', [HomeController::class, 'faqs'])->name('academic.faqs');
Route::get('/academic/academic', [AcademicController::class, 'academic'])->name('school.academic');
Route::get('/school/pptt', [AcademicController::class, 'pptt'])->name('school.pptt');
Route::get('/school/cna', [AcademicController::class, 'cna'])->name('school.cna');
Route::get('/school/orthopedics',[AcademicController::class, 'orthopedics'])->name('school.orthopedics');
Route::get('/academic/programs', [AcademicController::class, 'programs'])->name('academic.programs');
Route::get('/school/packages', [AcademicController::class, 'packages'])->name('school.packages');
// show form
Route::get('/academic/application', [ApplicationController::class, 'create'])->name('academic.application');
// handle form submission
Route::post('/apply', [ApplicationController::class, 'store'])->name('academic.application.store');
