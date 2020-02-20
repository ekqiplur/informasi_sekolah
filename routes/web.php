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

Route::get('/', 'DashboardController@index');
Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/fasilitas', 'DashboardController@fasilitas')->name('fasilitas');
Route::get('/kegiatan', 'DashboardController@kegiatan')->name('kegiatan');
Route::get('/kontak', 'DashboardController@kontak')->name('kontak.bord');
Route::get('/list-content', 'DashboardController@list_news')->name('news.list');
Route::get('/content/{slug}', 'DashboardController@news_content')->name('content.isi');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/profil/sejarah', 'ProfilController@index_sejarah')->name('profil.sejarah');
    Route::get('/profil/sejarah/{id}', 'ProfilController@sejarah')->name('profil.sejarah.view');
    Route::put('/profil/sejarah/{id}', 'ProfilController@sejarah_update')->name('profil.sejarah.update');
    
    
    Route::get('/profil/visi', 'ProfilController@index_visi')->name('profil.visi');
    Route::get('/profil/{id}', 'ProfilController@visi')->name('profil.visi.view');
    Route::put('/profil/{id}', 'ProfilController@visi_update')->name('profil.visi.update');
    
    
    Route::get('/admin/kontak', 'KontakController@index')->name('kontak');
    Route::get('/kontak/{id}', 'KontakController@edit')->name('kontak.edit');
    Route::put('/kontak/{id}', 'KontakController@update')->name('kontak.update');
    Route::resource('/ekstrakulikuler', 'EkstraController');
    Route::resource('/admin/fasilitas', 'FasilitasController');
    Route::get('/post/delete', 'PostController@history_delete')->name('post.delete');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/delete/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/user/{id}', 'UserController@update')->name('user.update');
    
    Route::get('/home', 'HomeController@index')->name('home');
});

