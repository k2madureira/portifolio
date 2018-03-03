

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
        
         <div class="col-lg-4 avatar-box">
              

          <img class="rounded-circle" src="/img/avatar.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Lenilson Madureira</h2>
            <p> Bacharel em Sistemas de informação, pela universidade do estado da Bahia (UNEB)</p>
            
         </div>
         


         <!-- Skills progress --> 

        <div class="col-md-4 skill-box">
        
        <span class="progress-type">Html</span>
        
            <div class="progress">

              <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>

            </div>

        <span class="progress-type">Css</span>

            <div class="progress">

              <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>

            </div>

        <span class="progress-type">Javascript</span>

            <div class="progress">

              <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>

            </div>

        <span class="progress-type">Php</span>

            <div class="progress">

              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>

            </div>

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
    

        
     