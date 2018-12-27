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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send_email', function () {
     \Mail::send('welcome', ['title' => 'test', 'content' => 'test content'], function ($message)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

        });
});

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::resource('products','ProductController');
Route::get('/ajaxcall', 'ProductController@ajaxcall');


Route::get('/home', 'HomeController@index')->name('home');

//********lazada*********
Route::get('/lazada_admin_delete/{id}', 'lazadaAdminController@delete');
Route::get('/lazada_admin_edit_process/{id}', 'lazadaAdminController@edit_process');
Route::get('/lazada_admin_edit/{id}', 'lazadaAdminController@edit');
Route::get('/lazada_admin_detail/{id}', 'lazadaAdminController@detail');
Route::get('/lazada_admin_list', 'lazadaAdminController@index');
Route::get('/lazada_admin_add', 'lazadaAdminController@add');
Route::post('/lazada_admin_add_process', 'lazadaAdminController@add_process');
//****lazada***
