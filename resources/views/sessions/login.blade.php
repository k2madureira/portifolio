
@extends('layout.master')
       
   @section('content')
        
            <div class="jumbotron">

              <form method="POST" action="/login">
                  {{ csrf_field() }}

              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
               
               <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Login</button>
               </div> 
             
            
             @include('layout.errors')
          
            </form>
            

            </div>
     


   @endsection
