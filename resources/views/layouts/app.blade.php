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
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <figure class="logo">
        <img src="{{ asset('images/logotemporal.png') }}" width="200" alt="logo de http://hidrocampo.com" />
      </figure>  
  <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  
<header class="header" id="inicio">
    <!-- Se utiliza para las cabeceras -->
    <div class="container">
      <figure class="logo">
        <img src="{{ asset('images/logotemporal.png') }}" width="200" alt="logo de http://hidrocampo.com" />
      </figure>
      <nav class="menu">
        <!-- <ul></ul> Esto es una lista desordenada -->
        <ol>
          <li><a href="#" class="link">Inicio</a></li>
          <li><a href="#" class="link">Nosotros</a></li>
          <li><a href="#" class="link">Contactenos</a></li>
          <li><a href="#" class="link">Producto</a></li>
          <li><a href="{{ route('login') }}" class="link">Acceder</a></li>
        </ol>
      </nav>
    </div>
  </header>
  
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
