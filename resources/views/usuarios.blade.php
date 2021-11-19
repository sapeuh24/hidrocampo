@extends('layouts.administrator')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Usuarios</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#crear_usuario">
                                Crear Usuario
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
                                        <th> Nombre </th>
                                        <th> Email </th>
                                        <th> Teléfono </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->nombre . ' ' . $user->apellidos }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>

                                                <div class="btn btn-info" onclick="editar_usuario({{ $user->id }})">
                                                    Editar</div>
                                                <a href="{{ route('eliminar_usuario', $user->id) }}"
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

        <!-- Modal Crear Usuario -->
        <div class="modal fade" id="crear_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('crear_usuario') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre_usuario" class="form-label">Nombre</label>
                                <input name="nomb_usuario" type="text" class="form-control" id="nombre_usuario">
                            </div>
                            <div class="mb-3">
                                <label for="apellido_usuario" class="form-label">Apellido</label>
                                <input name="apellido_usuario" type="text" class="form-control" id="apellido_usuario">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input name="telefono" type="number" class="form-control" id="telefono">
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
        <div class="modal fade" id="editar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editarn Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('actualizar_usuario') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre_user_edit" class="form-label">Nombre</label>
                                <input name="nombre_user_edit" type="text" class="form-control" id="nombre_user_edit">
                            </div>
                            <div class="mb-3">
                                <label for="apellido_user_edit" class="form-label">Apellido</label>
                                <input name="apellido_user_edit" type="text" class="form-control" id="apellido_user_edit">
                            </div>
                            <div class="mb-3">
                                <label for="telefono_user_edit" class="form-label">Teléfono</label>
                                <input name="telefono_user_edit" type="number" class="form-control"
                                    id="telefono_user_edit">
                            </div>
                            <input type="hidden" id="id_usuario" name="id_usuario">

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
        function editar_usuario(id) {
            axios.get('/traer_info_usuario/' + id)
                .then(function(response) {
                    console.log(response.data);
                    $('#editar_usuario').modal('show');
                    $('#nombre_user_edit').val(response.data.nombre);
                    $('#apellido_user_edit').val(response.data.apellidos)
                    $('#telefono_user_edit').val(response.data.telefono);
                    $('#id_usuario').val(response.data.id);
                    console.log(response.data.id);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
@endsection
