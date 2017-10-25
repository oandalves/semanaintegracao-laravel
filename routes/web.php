<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(array('prefix' => 'admin', 'middleware' => ['auth'], ['namespace' => 'admin'], 'as' => 'admin.'), function() {

	Route::get('/', 						'Admin\HomeController@index')->name('index');
	Route::get('/posts', 					'Admin\PostsController@index')->name('posts.index');
	Route::get('/posts/novo', 				'Admin\PostsController@create')->name('posts.create');
	Route::post('/posts/novo/salvar', 		'Admin\PostsController@store')->name('posts.create.save');
	Route::get('/posts/editar/{id}', 		'Admin\PostsController@edit')->name('posts.edit');
	Route::post('/posts/update/{id}', 		'Admin\PostsController@update')->name('posts.edit.update');
	Route::post('/posts/delete/{id}', 		'Admin\PostsController@destroy')->name('posts.delete');
});

Route::get('/', 				'HomeController@index')->name('home');
Route::get('/posts', 			'PostsController@index')->name('posts.index');
Route::get('/posts/ver/{id}', 	'PostsController@show')->name('posts.show');
