@extends('layouts.app')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SISTEMA <br><span>DE RIEGO</span></h5>
        <p>Es un componente tecnologico basico, programable para optimizar el riego de los cultivos .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="align-items: flex-start;">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <section id="nosotros">
    <div class="container">
      <header>
        <h2>Sobre Nosotros</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum bibendum nisi a sapien elementum auctor. Nam consectetur imperdiet aliquet. Maecenas sit amet porta justo.<p>
      </header>
      <div class="row">
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon-1.png') }}" class="icon" alt="...">
          <h3>Nuestros Planes</h3>
          <p>Proin in malesuada dui. Pellentesque sollicitudin diam quis ultrices posuere. Sed in magna tortor.</p>
          <button type="button" class="btn btn-danger btn-verMas">Ver m??s</button>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon-2.png') }}" class="icon" alt="...">
          <h3>Dispositivos</h3>
          <p>Proin in malesuada dui. Pellentesque sollicitudin diam quis ultrices posuere. Sed in magna tortor.</p>
          <button type="button" class="btn btn-danger btn-verMas">Ver m??s</button>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon-3.png') }}" class="icon" alt="...">
          <h3>Con??cenos</h3>
          <p>Proin in malesuada dui. Pellentesque sollicitudin diam quis ultrices posuere. Sed in magna tortor.</p>
          <button type="button" class="btn btn-danger btn-verMas">Ver m??s</button>
        </div>
      </div>
    </div> 
  </section>
  <section  id="galeria">

  </section>
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
@endsection