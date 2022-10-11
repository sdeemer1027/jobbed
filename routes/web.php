<?php

use Illuminate\Support\Facades\Route;

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
//Route::view('home-garden-supplies', 'guest.dropshiphomegarden')->name('dropship-homegarden');
Route::view('contactus','contactus')->name('contactus');
Route::view('aboutus','aboutus')->name('aboutus');
//Route::view('pencil','pencil')->name('');
Route::get('pencil', [App\Http\Controllers\PencilController::class, 'index'])->name('pencil');


Auth::routes();

Route::get('/weather', [App\Http\Controllers\WeatherController::class, 'index'])->name('weather');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/recipe', [App\Http\Controllers\RecipesController::class, 'index'])->name('recipe');
//Route::get('/recipe/{fid}', [App\Http\Controllers\RecipesController::class, 'showRecipe'])->name('getfood');
Route::get('/recipe/{fid}', [App\Http\Controllers\RecipesController::class, 'show'])->name('getfood');

Route::get('/art/photoshop',)->name('photoshop');




Route::get('users/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('user/profile/{id}', [App\Http\Controllers\UserController::class, 'showProfile'])->name('profile');

Route::resource('article', 'App\Http\Controllers\ArticleController');


