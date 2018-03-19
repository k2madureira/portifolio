

@extends('layout.master')
     


      @section('img1')
      @include('layout.svgs')
      
      <link href="/css/home.css" rel="stylesheet">

          <div class="home-img">
      @endsection
      @section('img2')
          </div>
      @endsection
      @section('content')
  

      <div class="" id="elements-position">
        <div class="row">
        
        <!-- Avatar auth --> 
        @foreach($skills as $skill)
         <div class="col-lg-4 avatar-box">
              

          <img class="rounded-circle" src="/img/avatar.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Lenilson Madureira</h2>
            <p> {{ $skill->description }}</p>
            
         </div>
         


         <!-- Skills progress --> 

        <div class="col-md-4 skill-box">

      
        
        <span class="progress-type">Html</span>
        
            <div class="progress">
              
              <div class="progress-bar" role="progressbar" style="width: {{  $skill->html }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{  $skill->html }}%</div>
              
            </div>

        <span class="progress-type">Css</span>

            <div class="progress">

              <div class="progress-bar bg-success" role="progressbar" style="width: {{  $skill->css }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{  $skill->css }}%</div>

            </div>

        <span class="progress-type">Javascript</span>

            <div class="progress">

              <div class="progress-bar bg-warning" role="progressbar" style="width: {{  $skill->js }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{  $skill->js }}%</div>

            </div>

        <span class="progress-type">Php</span>

            <div class="progress">

              <div class="progress-bar bg-danger" role="progressbar" style="width: {{  $skill->php }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{  $skill->php }}%</div>

            </div>

        @endforeach
      
      </div>
      
      <div class="col-md-4 social-box">

            <a href="">
              <svg class="icon icon-google">
                  <use xlink:href="#icon-google"></use>
              </svg>
            </a>
            
            <a href="">
              <svg class="icon icon-facebook">
                  <use xlink:href="#icon-facebook"></use>
              </svg>
            </a>

            <a href="">
              <svg class="icon icon-twitter">
                  <use xlink:href="#icon-twitter"></use>
              </svg>
            </a>

            <a href="">
              <svg class="icon icon-github">
                  <use xlink:href="#icon-github"></use>
              </svg>
            </a>


      </div>
      
    </div>
   </div> 
       

      @endsection
    

        
     