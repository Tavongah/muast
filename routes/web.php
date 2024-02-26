



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadprofileController;

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

Route::get('/vc', [App\Http\Controllers\VcController::class, 'vcindex'])->name('vc');


Route::get('upload-image', [ UploadprofileController::class, 'index' ]);
Route::get('uploaded', [ UploadprofileController::class, 'uploaded' ]);
Route::post('upload-image', [ UploadprofileController::class, 'store' ])->name('image.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
