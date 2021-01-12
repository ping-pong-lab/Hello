<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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


// コントロ－ラーテスト
// Route::get('hello','hellocontroller@index'); //1つのコントローラーに複数のfunctionアクションがある場合
// Route::get('hello/other','hellocontroller@other');
// Route::get('hello','hellocontroller');//1つのコントローラーに1つのアクションのみの場合

//ビューテスト
// Route::get('hello',function(){
//     return view('hello.index');
// });

//Bladeテスト
Route::get('hello','hellocontroller@index')
    ->middleware(HelloMiddleware::class);
// Route::post('hello','hellocontroller@post'); 
