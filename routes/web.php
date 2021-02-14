<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Models\Barang;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});



Route::get('/barang', [BarangController::class, 'index'])        ->middleware(['auth'])->name('dashboard');
Route::get('/barang/create', [BarangController::class, 'create'])   ->middleware(['auth']);
Route::post('/dashboard', [BarangController::class, 'store'])       ->middleware(['auth']);
Route::get('/barang/{id}',[BarangController::class, 'show'])       ->middleware(['auth']);
Route::get('/barang/{id}/edit',[BarangController::class, 'edit'])       ->middleware(['auth']);
Route::put('/barang/{id}',[BarangController::class, 'update'])       ->middleware(['auth']);
Route::delete('/barang/{id}',[BarangController::class, 'destroy'])       ->middleware(['auth']);



// Route::get('/artikel/{slug}', 'ArticleController@show');

