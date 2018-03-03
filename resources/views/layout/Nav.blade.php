    <nav class="navbar navbar-expand-md navbar-dark fixed-top " id="nav">
        
        <a class="navbar-brand text-light ">Portifólio</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
              

              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}"">Home<span class="sr-only"></span></a>
              </li>


              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/articles') }}"">Artigos<span class="sr-only"></span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/galery') }}">Galeria</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">Sobre</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/posts/create') }}">Criar</a>
              </li>
          </ul>
       
        </div>
      </nav>