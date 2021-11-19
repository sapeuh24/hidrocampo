@extends('layouts.administrator')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dispositivos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active">Dispositivos</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#crear_dispositivo">
                                Crear Dispositivo
                            </button>
                            @if (Session::has('message'))
                                <p
                                    class="alert mt-3
                                {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}</p>
                            @endif
                            <table class="table datatable">
                                <thead>
                                    <tr class="uppercase">
                                        <th> Dispositivo </th>
                                        <th> Direccion </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dispositivos as $dispositivo)
                                        <tr>
                                            <td>{{ $dispositivo->nomb_sensor }}</td>
                                            <td>{{ $dispositivo->direccion }}</td>
                                            <td>

                                                <div class="btn btn-info" onclick="ver_info())">
                                                    Ver info</div>
                                                <a href="{{ route('eliminar_dispositivo', $dispositivo->id) }}"
                                                    class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Button trigger modal -->

        <!-- Modal Crear Dispositivo -->
        <div class="modal fade" id="crear_dispositivo" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Dispositivo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('crear_dispositivo') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nomb_sensor" class="form-label">Nombre sensor</label>
                                <input name="nomb_sensor" type="text" class="form-control" id="nomb_sensor">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Direccion</label>
                                <select name="id_localizacion" class="form-control" id="localizacion">
                                    @foreach ($localizaciones as $localizacion)
                                        <option value="{{ $localizacion->id }}">{{ $localizacion->direccion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Editar Planes -->
        <div class="modal fade" id="ver_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver info dispositivo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mb3">

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
    <script>
        function ver_info() {
            $('#ver_info').modal('show');
        }
    </script>
@endsection
