<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos_index.css') }}">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <title>HidroCampo</title>
</head>
<body id="hidrocampo">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <figure class="logo">
        <img src="{{ asset('images/logotemporal.png') }}" width="240" alt="logo de http://hidrocampo.com" />
      </figure>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Acceder</a>
        </li>
        
  
      </ul>
    </div>
  </div>
</nav>  

  
  @yield('content')


  <footer class="footer">
    <div class="container">
      <div class="">
        <p>Hidro_campo sas 2020 <img src="images/logo.png" width="80" alt=""></p>
      </div>
      <div class="">
        <p>Designed for hidrocampo <a href="http://sebas_lindarte">@hidro_camp</a></p>
      </div>
    </div>
  </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>     
</body>

</html>
