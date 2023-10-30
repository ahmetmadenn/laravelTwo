<?php

use App\Models\iletisim;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\İletisim;

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

Route::get('/iletisim', [İletisim::class, 'index']);
Route::post('/iletisim-sonuc', [İletisim::class, 'ekleme'])->name('iletisim-sonuc');
