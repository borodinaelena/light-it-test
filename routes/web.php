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
	$posts = App\Post::with([
      'comments',
      'parentComments.user',
      'parentComments.allCommentsWithUser'
    ])->orderBy('created_at', 'DESC')->get();

    return view('index', ['posts' => $posts]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
