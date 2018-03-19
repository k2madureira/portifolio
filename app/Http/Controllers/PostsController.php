<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   

   public function __construct () {

      $this->middleware('auth')->except(['index','show','showPosts']);

   }




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

   		Post::create([

                'title'  => request('title'),
                'body'   => request('body'),
                'user_id'=> auth()->id()  
            ]);

   		
   	// And the redirect to the home page

      
   		return redirect('/');
   		
   }
}
