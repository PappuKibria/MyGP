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

Route::get('/','GPController@index')->name('dashboard');
Route::get('/contact', 'GPController@contact')->name('contact');
Route::get('/gallery', 'GPController@gallery')->name('gallery');
Route::get('/about', 'GPController@about')->name('about');

//Auth::routes();

//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group(['middleware'=>'auth'],function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
});

//Route::group(['middleware'=>'guest'],function () {
    Route::get('admin/home', 'AdminController@index')->name('admin.home');
    Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin', 'Admin\LoginController@login');
    Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::post('admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin/password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
    Route::get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('admin/register', 'Admin\RegisterController@register');
//});


//Route::get('/test', 'GPController@test');
Route::get('getColumns/{id}', 'GPController@getTableColumns');

Route::get('users/show', 'AdminController@usersAll')->name('users.show');
Route::get('users/edit/{id}', 'AdminController@usersEdit')->name('users.edit');
Route::post('users/update', 'AdminController@userUpdate')->name('userEdit');
Route::post('users/alumni_delete','AdminController@deleteData')->name('alumni_delete');
Route::get('users/activate', 'AdminController@activate')->name('activate');
Route::get('users/deactivate', 'AdminController@deActivate')->name('deactivate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alumniList', 'AlumniController@index')->name('alumniList');

