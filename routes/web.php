<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/home',function (){
   return view('home');
});
Route::get('login/google', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();

//     $user->token
});

Auth::routes();
Route::get('/test',[TestController::class,'index']);
//Route::post('Admin/products/create',[ProductController::class,'create']);
Route::get('Admin/products/gallery',[ProductController::class,'gallery']);
Route::post('Admin/products/upload',[ProductController::class,'upload']);
Route::group(['prefix'=>'Admin','middleware'=>['auth','isVerified']],function (){
    Route::resource('products', ProductController::class);
    Route::resource('user', UserController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::resource('category', CategoryController::class);
});
Route::resource('slider', SliderController::class);

