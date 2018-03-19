

@extends('layout.master')
       
  <link href="/css/forms.css" rel="stylesheet">    
   @section('content')
            
          @include('layout.errors')
          <div class="jumbotron">

              <form method="POST" action="/updescrip">
                  {{ csrf_field() }}
                   
                <div class="form-group">

                  <h1 class="title-form">Description</h1>
                  <textarea type="text" class="form-control" id="description" placeholder="Descrição do portfólio" name="description" rows="5"></textarea> 
                
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Update</button>
                </div>  

              </form>

           </div>
          


            <div class="jumbotron">

              <form method="POST" action="">
                  {{ csrf_field() }}
              
              <h1 class="title-form">Skills</h1>
              
              <div class="form-group">

                <label class="form-label">HTML <div class="box-label" id="bl-html"></div></label>
                <input type="number" class="form-control" id="html" placeholder="" name="html">

                <label class="form-label">CSS <div class="box-label" id="bl-css"></div></label>
                <input type="number" class="form-control" id="css" placeholder="" name="css">

                <label class="form-label">JavaScript <div class="box-label" id="bl-js"></div></label>
                <input type="number" class="form-control" id="js" placeholder="" name="js">
                
                <label class="form-label">Php <div class="box-label" id="bl-php"></div></label>
                <input type="number" class="form-control" id="php" placeholder="" name="php">


              </div>
              
             
               
               <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Update</button>
               </div> 
             
            
            </form>
            

            </div>
     


   @endsection
