<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello-world', function() {
        return view('hello-world');
    });
Route::get('/hello-world/{year}/{yourname?}', function($year, $yourname = null) {
    if ($yourname == null) {
        echo('hello-world' . $year);
    } else {
        echo('Hello-world' . $year . 'My name is' . $yourname);
    }
});
Route::get('/role', [
    'middleware' => 'role:superadmin',
    'users' => 'MainController@checkRole',
]);
Route::get('goicontroller', 'Mycontroller@xinchao');
Route::get('thamso/{ten}', 'Mycontroller@khoahoc');
Route::get('Myrequest', 'Mycontroller@GetURL');
Route::get('tuoi', function () {
    echo 'ban da du tuoi';
})->middleware('checkage')->name('tuoi');
Route::get('loi', function () {
    echo 'ban chua du tuoi';
})->name('loi');
Route::get('nhaptuoi', function() {
    return view('nhaptuoi');
})->name('nhaptuoi');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dangnhap','LoginController@getLogin');
Route::post('dangnhap','LoginController@postLogin');
Route::get('log_in','AuthController@logins')->name('log_in');
Route::get('customer/create', 'CustomerController@create');
Route::post('customer/create', 'CustomerController@store');