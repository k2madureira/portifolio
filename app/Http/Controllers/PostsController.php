<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   public function show (Post $post) {

   		
   		return view('posts.show',compact('post'));

   }

   public function showPosts() {

   		$posts = Post::latest()->get();

		return view('posts.allshow', compact('posts'));
   }

   public function createPost() {

   		
   		return view('posts.newpost');
   }

   public function store() {

   	// create a new post using the request data
   		
   		$this->validate(request(), [

   				'title' => 'required',
   				'body'  => 'required'
   			]);

   		Post::create(request(['title','body']));


   		/*
   		// another way, to create a new post

   		$post = new Post;
   		$post->title = request('post-Title');
   		$post->body  = request('post-Text');
   		$post->save(); */


   		
   	// And the redirect to the home page

   		return redirect('/');
   		
   }
}
