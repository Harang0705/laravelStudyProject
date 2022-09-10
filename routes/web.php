<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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
/**
 * 목적 :
 * 만든일시 : 2022-09-01 Thu 16:49:18
 * 제작자 : 지건우
 * 업데이트 일시 : 2022-09-01 Thu 16:49:20
 * 업데이트 사유 :
 */
// Route::get('/', [BoardController::class]);
// Route::get('borad', [boardController::class, 'index']);

Route::get('/', function () {
    return view('index');
})->name('main');

Route::prefix('board')->group(function () {
    Route::get('/', [boardController::class, 'index'])->name('board.index');
    Route::get('/create', [boardController::class, 'create'])->name('board.create');
    Route::post('/store', [boardController::class, 'store'])->name('board.store');
});
