
@extends('layout.master')
       
      @section('content')
        
            @foreach ($posts as $post)
            <h3></h3>
           
                <div class="jumbotron">
                  <a href="/posts/ {{ $post->id }}">

                      <h2 class="post-title lead">
                        {{ $post->title }}
                      </h2>

                  </a>
                  
                  
                  <div class="form-group">

                      <p class="">
                        {{ $post->body }} 
                      </p>

                  </div>
                  
                  
                
                </div>

             @endforeach
            


      @endsection
