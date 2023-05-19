<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

// Route::group([  
//     'prefix' => 'dashboard/', 
// ], function () {

// Route::get('/', function () {
//     return view('pages.dashboard.index');
// })->name('admin.dashboard');

// Route::resource('/category', CategoryController::class);
// Route::post('/category_status',[CategoryController::class,'statusChange']);
// });