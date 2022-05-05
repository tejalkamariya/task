<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\BlogController;
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
// Route::get('/addblog', function () {
 
// });
 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/addblog', function () {
 
// });
Route::get('/addblog', [App\Http\Controllers\BlogController::class, 'create'])->name('addblog');
Route::get('/listblog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit']);
Route::post('/update', [App\Http\Controllers\BlogController::class, 'update']);
Route::post('/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete']);
Route::resource('/data','BlogController');
Route::post('/storedata', [App\Http\Controllers\BlogController::class, 'store']);
// Route::get('/addblog',[BlogController::class,'store']);
//Route::get('/addform',BlogController@)

