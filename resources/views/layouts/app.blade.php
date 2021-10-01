<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/estilos_index.css') }}">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <title>HidroCampo</title>
</head>
<body>
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

</body>

</html>
