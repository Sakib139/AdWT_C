<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact-us');
Route::get('/service', [PagesController::class, 'service'])->name('service');
Route::get('/our-teams', [PagesController::class, 'our_teams'])->name('our-teams');
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about-us');

