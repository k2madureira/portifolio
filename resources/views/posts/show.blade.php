
@extends('layout.master')
       
      @section('content')
        
          
            <h3></h3>
           
                
                 

                      <h2 class="post-title lead">
                        {{ $post->title }}
                      </h2>

                 
                  
                  <div class="jumbotron">

                

                      <p class="">
                        {{ $post->body }}
                      </p>

                
                  
                  
                
                </div>

           
            


      @endsection
