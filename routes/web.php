<?php



Route::get('/', 'HomeController@showHome')->name('home');
Route::get('/about','HomeController@showAbout');


Route::post('/posts','PostsController@store'); 					// Insert post in database
Route::get('/articles', 'PostsController@showPosts');			// Load Posts
Route::get('/posts/{post}','PostsController@show');				// Load  specfic post  
Route::get('/create','PostsController@createPost');				// Load view for create a post

Route::get('/galery','GaleryController@showGalery');			// Load galery view


Route::get('/update','SkillController@show');					// Laod  update view	
Route::post('/updescrip','SkillController@updateDescription');  // Update author description

Route::get('/login','SessionsController@create');				// Login view
Route::post('/login','SessionsController@store');				// Loging
Route::get('/logout','SessionsController@destroy');				// Logout