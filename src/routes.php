<?php

use Illuminate\Support\Facades\Route;
use RDBI\CMS\PublicationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/starter', function () {
    return view('welcome');
});

/**
 * Publications
 */
Route::get('/pages', [PublicationController::class, 'pages'])
    ->name('page.index');

Route::get('/pages/{slug}', [PublicationController::class, 'page'])
    ->name('page.single');

/**
 * Articles
 */
Route::get('/articles', [PublicationController::class, 'articles'])
    ->name('article.index');

Route::get('/articles/{slug}', [PublicationController::class, 'article'])
    ->name('article.single');

/**
 * Videos
 */
Route::get('/recipes', [PublicationController::class, 'recipes'])
    ->name('recipe.index');

Route::get('/recipes/{slug}', [PublicationController::class, 'recipe'])
    ->name('recipe.single');

/**
 * Videos
 */
Route::get('/videos', [PublicationController::class, 'videos'])
    ->name('video.index');

Route::get('/videos/{slug}', [PublicationController::class, 'video'])
    ->name('video.single');
