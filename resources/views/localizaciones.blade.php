@extends('layouts.administrator')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Localizaciones</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active">Localizaciones</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#crear_localizacion">
                                Crear Localizacion
                            </button>
                            <table class="table datatable">
                                <thead>
                                    <tr class="uppercase">
                                        <th> Dirección </th>
                                        <th> Ciudad </th>
                                        <th> Usuario </th>
                                        <th> Plan </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($localizaciones as $localizacion)
                                        <tr>
                                            <td>{{ $localizacion->direccion }}</td>
                                            <td>{{ $localizacion->nomb_ciudad }}</td>
                                            <td>{{ $localizacion->name . ' ' . $localizacion->apellidos }}</td>
                                            <td>{{ $localizacion->nomb_plan }}</td>
                                            <td>

                                                <div class="btn btn-info"
                                                    onclick="editar_localizacion({{ $localizacion->id }})">
                                                    Editar</div>
                                                <a href="{{ route('eliminar_localizacion', $localizacion->id) }}"
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

        <!-- Modal Crear Planes -->
        <div class="modal fade" id="crear_localizacion" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('create_planes') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input name="direccion" type="text" class="form-control" id="direccion">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <select name="ciudad" class="form-control" id="ciudad">
                                    @foreach ($ciudades as $ciudad)
                                        <option value="{{ $ciudad->id }}">{{ $ciudad->nomb_ciudad }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <select name="usuario" class="form-control" id="usuario">
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}">
                                            {{ $usuario->nombre . ' ' . $usuario->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="plan" class="form-label">Plan</label>
                                <select name="plan" class="form-control" id="plan">
                                    @foreach ($planes as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->nomb_plan }}</option>
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
        <div class="modal fade" id="editar_localizacion" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('actualizar_localizacion') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre_plan_edit" class="form-label">Nombre plan</label>
                                <input name="nomb_plan_edit" type="text" class="form-control" id="nombre_plan_edit">
                            </div>
                            <div class="mb-3">
                                <label for="precio_edit" class="form-label">Precio</label>
                                <input name="precio_edit" type="number" class="form-control" id="precio_edit">
                            </div>
                            <div class="mb-3">
                                <label for="cantidad_edit" class="form-label">Cantidad de disp</label>
                                <input name="cantidad_edit" type="number" class="form-control" id="cantidad_edit">
                            </div>
                            <input type="hidden" id="id_plan" name="id_plan">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
    <script>
        function editar_plan(id) {
            axios.get('/traer_info_localizacion/' + id)
                .then(function(response) {
                    $('#editar_plan').modal('show');
                    $('#nombre_plan_edit').val(response.data.nomb_plan);
                    $('#precio_edit').val(response.data.precio);
                    $('#cantidad_edit').val(response.data.cant_dispositivos);
                    $('#id_plan').val(response.data.id);
                    console.log(response.data.id);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
@endsection
