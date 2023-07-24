<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
// use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/users', function () {
    return view('users');
})->name('index');
// Rout::get('/users', 'UserController@index')->name('users.index');
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('users.generate-pdf');
Route::resource('users','App\Http\Controllers\UserController');
Route::resource('invoices','App\Http\Controllers\InvoiceController');
Route::get('/invoices', 'InvoiceController@index')->name('invoices.index');
// Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('invoices.generate-pdf');
// Route::get('/invoices', function () {
//     return view('invoices');
// })->name('index');
