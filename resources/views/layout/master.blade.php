
<!doctype html>
<html lang="en">
  <head>
   @include('layout.head')
  </head>
  <body>
  @yield('img1')
    <header>
     @include ('layout.nav') 
    </header>
      
    <main role="main" class="container">
       
        @yield('content')
    
    </main>
    @yield('img2')
    @include('layout.footer')

  </body>
</html>
