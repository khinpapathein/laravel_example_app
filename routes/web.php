<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[TemplateController::class, 'homepage'])->name('a');
Route::get('/about',[TemplateController::class, 'aboutpage'])->name('b');
Route::get('/post',[TemplateController::class, 'postpage'])->name('c');
Route::get('/contact',[TemplateController::class, 'contactpage'])->name('d');

Route::resource('/student',StudentController::class);
