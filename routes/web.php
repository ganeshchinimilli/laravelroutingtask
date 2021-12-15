<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\samplecontroller;

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
Route::get('/sample', function () {
    return view('samplepage');
});
Route::get('/show',[samplecontroller::class,'show']);

Route::get('/data/{data}',function($data){
    return view('about',['about'=>$data]);
});
Route::get('/second/{content?}',function($content='ganeshraj'){
    return view('second',['second'=>$content]);
});