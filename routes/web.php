<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
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

//première approche de façon basique(sans utilisation de controleur)
// Route::get('/', function () {
//     return view('layouts.master');
// });

// Route::get('/contact-us', function(){
//     return view('layouts.contact');
// });

//Utilisation des controleurs avec la syntaxe de laravel 7
// Route::get('/', 'PagesController@index');
// Route::get('/contact', 'PagesController@contact');

//Utilisation des controleurs avec la syntaxe de laravel 7
Route::get('/', [PagesController::class, 'index']);

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/articles', [ArticlesController::class, 'index']);

//route utilisée pour l'affichage lors de l'utilisation de l'id de l'article
// Route::get('/articles/{id}', [ArticlesController::class, 'show']);

// Route::get('/articles/{title}', [ArticlesController::class, 'show']);

// Route::get('/articles/{article:title}', [ArticlesController::class, 'show']);

//Retour à la cse dedépart
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
