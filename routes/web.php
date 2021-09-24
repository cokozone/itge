<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return csrf_token();
// });

// http://myblog.site/about
// http://localhost/myblog/public/about
// Route::get('about', function () {
//     return 'About page';
// });

// http://myblog.site/user/5
// http://myblog.site/user/samit
Route::get('user/{id?}', function ($id="") {
    return 'User: '.$id;
});

Route::post('product', function () {
    return 'This is my product';
});

Route::put('product', function () {
    return 'Update product';
});

Route::delete('product', function () {
    return 'Delete product';
});

Route::get('category/{name}', function ($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('group/{id}', function ($id){
    return $id;
})->where('id','[0-9]+');

Route::get('product/{id}/{name}', function ($id, $name) {
    return 'Product ID:'.$id.'<br>Product name:'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//App\Http\Controllers\HomeController
Route::get('/', [HomeController::class,'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('service', [HomeController::class, 'service']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('login', [HomeController::class, 'login']);
