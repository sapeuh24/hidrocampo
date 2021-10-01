@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
      <h1>Hola! Somos <strong>Hidro campo</strong><br>Una solucion <strong>para tu cultivo</strong></h1>
      <img class="hero-image" src="images/inicio.jpg" width="500" height="300" alt="imagen principal">

    </div>
  </section>
  <section id="Portafolio" class="Portafolio">
    <div class="container">
      <h2>Sistemas de riego</h2>
      <article class="project">
        <div class="project-details">
          <h3 class="project-title">Sistema de riego</h3>
          <h6 class="project-course">1<sup>o</sup>sitema de riego</h6>
          <p class="project-descripction">Es un componente tecnologico basico, programable para optimizar el riego de los cultivos .</p>
        </div>
        <figure class="project-imageContainer">
          <img src="images/foto.jpg" alt="lo que muestra bajo al img" width="350">
        </figure>
      </article>
      <article class="project">
        <figure class="project-imageContainer">
          <img src="images/campo.jpg" alt="lo que muestra bajo al img" width="400">
        </figure>
        <div class="project-details">
          <h3 class="project-title">Titulo para la segunda parte</h3>
          <h6 class="project-course">segundo slide</h6>
          <p class="project-url"><small><strong>visita el sito: </strong> hidrocampo.com</small></p>
          <p class="project-descripction">texto para llenar el.</p>
        </div>
      </article>
    </div>
  </section>
  </section>
  <div class="container">
    <h2 class="event-list-title">Implementacion.</h2>
  </div>
  <section id="eventos" class="event-list">
    <div class="container">
      <article class="event">
        <figure class="event-imageContainer">

          <img class="event-image" src="images/cover_proyecto.jpg" />
        </figure>
        <div class="event-detail">
          <h3 class="event-title">Descripcion imagen</h3>
          <p class="event-descripction">Descripcion del la imgaen de arriba</p>
          <a class="event-url" href="https://youtu.be/deWFYJkAMbA" target="_blank">ver el video</a>
        </div>
      </article>
      <article class="event">
        <figure class="event-imageContainer">

          <img class="event-image" src="images/cover_proyecto.jpg" />
        </figure>
        <div class="event-detail">
          <h3 class="event-title">Descripcion imagen</h3>
          <p class="event-descripction">Descripcion del la imgaen de arriba</p>
          <a class="event-url" href="https://youtu.be/deWFYJkAMbA" target="_blank">ver el video</a>
        </div>
      </article>
    </div>
  </section>
  <section id="contacto" class="contact">
    <div class="container">
      <form action="/suscription/" class="form-email">
        <h3>Quieres ser parte ?</h3>
        <label for="email"></label>
        <input type="text" placeholder="Deja tu e-mail" id="email">
        <button type="button" name="">Enviar</button>
      </form>
      <div class="social">
        <a href="https://twitter.com/jslindarte28" class="social-link twitter"></a>
        <a href="https://www.facebook.com/SEBASTT.SANCHEZ" class="social-link facebook"></a>
        <a href="https://www.github.com" class="social-link github"></a>
        <a href="https://www.instagram.com/sebas_lindarte/" class="social-link instagram"></a>
      </div>
    </div>
  </section>
    
@endsection