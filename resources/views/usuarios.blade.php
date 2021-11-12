@extends('layouts.administrator')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Usuarios</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listado de usuarios</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr class="uppercase">
                                        <th colspan="2"> Nombre </th>
                                        <th> Email </th>
                                        <th> telefono </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic"
                                                    src="../assets_user/pages/media/users/avatar4.jpg">
                                            </td>
                                            <td>
                                                {{ $user->nombre . ' ' . $user->apellidos }}
                                            </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->telefono }} </td>
                                            <td>

                                                <a class=" btn btn-outline sbold" data-target="#stack1"
                                                    data-toggle="modal"><i class="bi bi-pen"></i></a>
                                                <a href=" {{ route('destroy_user', $user->id) }}"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div id="stack1" class="modal fade" tabindex="-1" data-width="400">
                                            <div class="modal-dialog" style="left:0">
                                                <form method="post" action="{{ route('update_user', $user->id) }}">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Editar usuario
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4>{{ $user->nombre . ' ' . $user->apellidos }}
                                                                    </h4>
                                                                    <label for="nombre">Nombre</label>
                                                                    <p>
                                                                        <input id="nombre" name="nombre" type="text"
                                                                            value="{{ $user->nombre }}"
                                                                            class="col-md-6 form-control">
                                                                    </p>
                                                                    <label for="apellido">Apellido</label>
                                                                    <p>
                                                                        <input id="apellidos" name="apellidos" type="text"
                                                                            value="{{ $user->apellidos }}"
                                                                            class="col-md-6 form-control">
                                                                    </p>
                                                                    <label for="telefono">Teléfono</label>
                                                                    <p>
                                                                        <input id="telefono" name="telefono" type="text"
                                                                            value="{{ $user->telefono }}"
                                                                            class="col-md-6 form-control">
                                                                    </p>
                                                                    <label for="telefono">Email</label>
                                                                    <p>
                                                                        <input id="email" name="email" type="text"
                                                                            value="{{ $user->email }}"
                                                                            class="col-md-6 form-control">
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal"
                                                                class="btn dark btn-outline">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Actualizar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
