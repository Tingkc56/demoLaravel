<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\MimiController;
//花括号里面可以加入很多，用逗号隔开，以免重复
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

//召唤已设定主页
// Route::get('/', function () {
//     return view('welcome');
// });

//召唤variable
// Route::get('/hello/{name?}', function ($name=null) {
//     echo "hello".$name;
// });

//从controller里面召唤自己的页面
Route::get('/',[FrontController::class,'index']);
//每一个页面都有自己的urn，后面要修改，如下加上coucou，才能在页面中召唤http://demolaravel.test/coucou
Route::get('coucou',[FrontController::class,'coucou']);

Route::get('clickmoi',[FrontController::class,'clickmoi']);



Route::resource('mimi',MimiController::class);

