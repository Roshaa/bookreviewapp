<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return redirect()->route('books.index');
});

//Como usa a resource é necessario o only() para funcionar apenas para o show
Route::Resource('books',BookController::class)->only(['index','show']);

Route::Resource('books.reviews',ReviewController::class)->scoped(['review'=>'book'])->only(['create','store']);