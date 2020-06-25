<?php

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

Route::get('/', 'ApiController@indexAction');

Route::get('/add_playlist', 'ApiController@add_playlistAction');

Route::get('/album', 'ApiController@albumAction');

Route::get('/album_single', 'ApiController@album_singleAction');

Route::get('/artist', 'ApiController@artistAction');

Route::get('/artist_single', 'ApiController@artist_singleAction');

Route::get('/blog', 'ApiController@blogAction');

Route::get('/blog_single', 'ApiController@blog_singleAction');

Route::get('/download', 'ApiController@downloadAction');

Route::get('/favourite', 'ApiController@favouriteAction');

Route::get('/feature_playlist', 'ApiController@feature_playlistAction');

Route::get('/free_music', 'ApiController@free_musicAction');

Route::get('/genres', 'ApiController@genresAction');

Route::get('/genres_single', 'ApiController@genres_singleAction');

Route::get('/history', 'ApiController@historyAction');

Route::get('/manage_acc', 'ApiController@manage_accAction');

Route::get('/profile', 'ApiController@profileAction');

Route::get('/purchase', 'ApiController@purchaseAction');

Route::get('/stations', 'ApiController@stationsAction');

Route::get('/top_track', 'ApiController@top_trackAction');

Route::get('/upload', 'ApiController@uploadAction');

