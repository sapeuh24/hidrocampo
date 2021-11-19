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
    <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SISTEMA <br><span>DE RIEGO</span></h5>
        <p>Es un componente tecnologico basico, programable para optimizar el riego de los cultivos .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="...">
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
          <button type="button" class="btn btn-danger btn-verMas">Ver más</button>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon-2.png') }}" class="icon" alt="...">
          <h3>Dispositivos</h3>
          <p>Proin in malesuada dui. Pellentesque sollicitudin diam quis ultrices posuere. Sed in magna tortor.</p>
          <button type="button" class="btn btn-danger btn-verMas">Ver más</button>
        </div>
        <div class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon-3.png') }}" class="icon" alt="...">
          <h3>Conócenos</h3>
          <p>Proin in malesuada dui. Pellentesque sollicitudin diam quis ultrices posuere. Sed in magna tortor.</p>
          <button type="button" class="btn btn-danger btn-verMas">Ver más</button>
        </div>
      </div>
    </div> 
  </section>
  <section  id="destacado">
    <div class="image">
      <img src="{{ asset('images/imgDestacada1.jpg') }}" alt="">
    </div>
    <div class="content">
      <h3>Agricultura Inteligente</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc semper tempor mi, eget aliquam lacus tincidunt ut. Pellentesque ultrices justo eget dolor suscipit, non cursus dui vehicula. Nullam varius vulputate velit ut fermentum. Donec tempus rutrum augue, sit amet dictum orci pellentesque iaculis. </p>
    </div>
  </section>
  <section id="galeria">
    <div class="container">
      <header>
          <h2>Nuestros Proyectos</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum bibendum nisi a sapien elementum auctor. Nam consectetur imperdiet aliquet. Maecenas sit amet porta justo.</p>
      </header>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="contenedorGaleria">
            <div class="contenedorGalleft">
              <div class="image"></div>
              <div class="image"></div>
              <div class="image"></div>
            </div>
            <div class="contenedorGalright">
              <div class="image"></div>
            </div>
            
            
          </div>
        </div>
        <div class="col-12 col-md-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/iseaGvJFOgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
      
 
@endsection