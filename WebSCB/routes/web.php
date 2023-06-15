<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/announcement', function () {
    return view('announcement');
});
Route::get('/live', function () {
    return view('live');
});
Route::get('/login', function () {
    return view('login');
});




//buat GET,POST,UPDATE,DELETE
Route::get('/home', [LoginController::class,'doLogin'])->name('login');





//buat authentication
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['auth_verification:admin']], function () {
    	/*
    		Route Khusus untuk role admin
    	*/
        Route::get('/homepage', function(){
            return view('homepage');
        });
    });
    Route::group(['middleware' => ['auth_verification:user']], function () {
    	/*
    		Route Khusus untuk role user
    	*/
        Route::get('/homepage', function(){
            return view('homepage');
        });

    });
});