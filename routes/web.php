<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitController;

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

Route::get('/', [RecruitController::class, 'index'])
    ->name('root');
Route::resource('recruits', RecruitController::class)
    ->only(['index', 'show']);

Route::resource('recruits', App\Http\Controllers\RecruitController::class);
// リソースを使用しない場合
// Route::get('/recruits', [App\Http\Controllers\RecruitController::class, 'index']);
// Route::get('/recruits/create', [App\Http\Controllers\RecruitController::class, 'create']);
// Route::post('/recruits', [App\Http\Controllers\RecruitController::class, 'store']);
// Route::get('/recruits/{recruit}', [App\Http\Controllers\RecruitController::class, 'show']);
// Route::get('/recruits/{recruit}/edit', [App\Http\Controllers\RecruitController::class, 'edit']);
// Route::patch('/recruits/{recruit}', [App\Http\Controllers\RecruitController::class, 'update']);
// Route::delete('/recruits/{recruit}', [App\Http\Controllers\RecruitController::class, 'destroy']);