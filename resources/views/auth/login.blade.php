@extends('layouts.login')

@section('content')
<div id="container-login">
    <div class="container-two-login">
      <form class="formulario" method="POST" action="{{ route('login') }}">
        @csrf
          <img src="images/logotemporal.png" class="logo"></img>
          <h1 class="title-login">INGRESAR</h1>
          <div class="contenedor">
              <div class="input-contenedor">
                <span class="input-icon"><i class="fas fa-user"></i></span>
                  <input class="input-login" type="text" placeholder="Correo Electronico" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              <div class="input-contenedor">
                  <span class="input-icon"><i class="fas fa-key icon"></i></span>
                  <input class="input-login" type="password" placeholder="Contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              <button class="button-login" type="submit">INICIAR SESIÓN</button>
          </div>
        </form>
    </div>
  </div>
@endsection
