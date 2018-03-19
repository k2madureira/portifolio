
@extends('layout.master')

      
      @section('content')
        <link href="/css/allPosts.css" rel="stylesheet"> 


            @foreach ($posts as $post)
            <h3></h3>
           
                <div class="jumbotron">
                  <a href="/posts/ {{ $post->id }}">
          
                      <h2 class="post-title lead">
                        {{ $post->title }}
                      </h2>

                  </a>
                  <hr>
                  
                  <div class="form-group posts">

                      <p>
                        {{ $post->body }} 
                      </p>

                  </div>
                  
                  <div class="post-date">{{ $post->created_at->toFormattedDateString() }}</div>
                  
                
                </div>

             @endforeach
            


      @endsection
