<?php



Route::get('/', 'HomeController@showHome');
Route::get('/about','HomeController@showAbout');

Route::post('/posts','PostsController@store'); 					// Insert post in database
Route::get('/articles', 'PostsController@showPosts');			// Load Posts
Route::get('/posts/{post}','PostsController@show');				// Load  specfic post  
Route::get('/posts/create','PostsController@createPost');		// Load view for create a post

Route::get('/galery','GaleryController@showGalery');			// Load galery view
