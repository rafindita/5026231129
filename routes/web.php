<?php
//equals with import java.blablabal
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
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
//equals with system.out.println()
Route::get('/', function () {
    return view('welcome');
});
Route::get('/selamat',function(){
    return view('notifications::email');
});
Route::get('/halo',function(){
    return "<h1>hai</h1>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('hello',[Coba::class,"helloWorld"]);
Route::get('/linktree', function(){
    return view('linktree');
})->name('linktree');
Route::get('/pertemuan1', function(){
    return view('pertemuan1');
})->name('pertemuan1');

Route::get('/bootstrap', function(){
    return view('bootstrap');
})->name('bootstrap');
Route::get('/bootstrap1', function(){
    return view('bootstrap1');
})->name('bootstrap1');
Route::get('/latihanlayout', function(){
    return view('index');
})->name('latihanlayout');
Route::get('/Dom', function(){
    return view('javas');
})->name('Dom');
Route::get('/makeover',function(){
    return view('danantara');
})->name('makeover');
Route::get('/topikcss',function(){
    return view('topikcss');
})->name('topikcss');
Route::get('/frontend',function(){
    return view('navigator');
});
