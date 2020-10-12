<?php

use Illuminate\Support\Facades\Route;
use App\Profile;

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

/*Default*
Route::get('/', function () {
    return view('welcome');
});
*/

#Index
Route::get('/', function () {
    return view('index');
})->name('index');

#About
Route::get('/about', function () {
    return view('about');
})->name('about');


#內建的auth寫法
//Auth::routes();
/*
 *以下同Auth::routes();
 */
//登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
//登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//忘記密碼
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



//使用者登入首頁
Route::get('/home', 'HomeController@index')->name('home');
//使用者名片頁
Route::get('/home/{id}', 'HomeController@show')->name('home.show');
//編輯使用者名片
Route::get('/home/{id}/edit', 'HomeController@edit')->name('home.edit');
//更新修改後的使用者名片
Route::post('/home/{id}/update', 'HomeController@update')->name('home.update');



//使用者文章首頁
Route::get('/post', 'PostsController@index')->name('post');
//發佈新文章
Route::get('/post/create', 'PostsController@create')->name('post.create');
//儲存發佈文章
Route::post('/post/store', 'PostsController@store')->name('post.store');
//使用者文章頁
Route::get('/post/{id}', 'PostsController@show')->name('post.show');
//編輯發佈之文章
Route::get('/post/{id}/edit', 'PostsController@edit')->name('post.edit');
//更新修改後的文章
Route::patch('/post/{id}/update', 'PostsController@update')->name('post.update');
//刪除文章
Route::delete('/post/{id}/delete', 'PostsController@destroy')->name('post.delete');



Route::get('/img/{file_path}', 'PhotosController@getImg')->name('img');
//使用者相簿首頁
Route::get('/photos', 'PhotosController@index')->name('photos');
//使用者相簿頁
Route::get('/photos/{id}', 'PhotosController@show')->name('photos.show');

//新增相片之表單
Route::get('/photos/{id}/create', 'PhotosController@create')->name('photos.create');
//儲存上傳之相片
Route::post('/photos/store', 'PhotosController@store')->name('photos.store');







