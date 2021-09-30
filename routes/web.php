<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/shipment', [HomeController::class, 'shipment'])->name('shipment');
Route::get('/add_new_shipment', [HomeController::class, 'add_new_shipment'])->name('add_new_shipment');
Route::get('/pp', [HomeController::class, 'preview_print'])->name('preview.print');
Route::resource('ship', ShipmentController::class);