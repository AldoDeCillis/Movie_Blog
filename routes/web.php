<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

//Public Routes
Route::get('/', [PublicController::class, 'showHomepage'])->name('homepage');
Route::get('/becomeRevisor', [PublicController::class, 'becomeRevisor'])->name('revisor.become');
Route::put('/becomeRevisor/update', [PublicController::class, 'updateExtraInfo'])->name('updateRevisor.become');
Route::get('/makeRevisor/{user}', [PublicController::class, 'makeUserRevisor'])->name('make.revisor');

//Article Routes
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
// Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//Revisor Routes
Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::get('/revisor/show/{article}', [RevisorController::class, 'show'])->name('revisor.show');
Route::patch('revisor/accept/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.accept');
Route::patch('revisor/reject/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.reject');
Route::patch('revisor/undo', [RevisorController::class, 'undo'])->name('revisor.undo');