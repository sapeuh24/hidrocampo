<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>HidroCampo</title>
</head>
<body>
  <nav class="menu" id="menu-principal">
    <div class="container">
      <div class="logo-menu">
        <img src="images/logotemporal.png" alt="Logo HidroCampo" class="imagen-logo">
      </div>
      <ul>
        <li><a href="#" class="enlace-menu">Inicio</a></li>
        <li><a href="#" class="enlace-menu">Nosotros</a></li>
        <li><a href="#" class="enlace-menu">Contactenos</a></li>
        <li><a href="#" class="enlace-menu">Producto</a></li>
        <li><a href="{{ route('login') }}" class="enlace-menu">Acceder</a></li>
      </ul>
    </div>
  </nav>

</body>
</html>