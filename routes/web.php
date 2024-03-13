<?php


use App\Http\Controllers\AdminController;


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
    return 'aaaaa';
});

Route::get('/my_page', function(){
    return 'this is my page';
});

Route::get('/admin',[AdminController::class,'index'])->name('index'); //Что такое ->Name
Route::get('/test', [AdminController::class,'test'])->name('test');
Route::get('/test/create', [AdminController::class,'create']);







