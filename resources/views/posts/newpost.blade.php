

@extends('layout.master')
       
   @section('content')
        
            <div class="jumbotron">

              <form method="POST" action="/posts">
                  {{ csrf_field() }}

              <div class="form-group">
                <label for="exampleFormControlInput1">Titulo</label>
                <input type="text" class="form-control" id="title" placeholder="" name="title">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto</label>
                <textarea class="form-control" id="body" name="body" rows="5" ></textarea>
              </div>
               
               <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Salvar</button>
               </div> 
             
            
             @include('layout.errors')
          
            </form>
            

            </div>
     


   @endsection
