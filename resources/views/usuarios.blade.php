@extends('layouts.administrator')

@section('content')
    {{-- <div class="page-wrapper">
        <div class="page-container">
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body"
                                        data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                                        data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body"
                                        data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body"
                                        data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body"
                                        data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body"
                                        data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                    data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h1 class="page-title"> Perfil de usuario
                        <small></small>
                    </h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-sidebar">
                                <div class="portlet light profile-sidebar-portlet ">
                                    <div class="profile-userpic">
                                        <img src="../assets_user/pages/media/profile/profile_user.jpg"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Oscar Arias </div>
                                        <div class="profile-usertitle-job"> Desarrollador </div>
                                    </div>
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">Seguir</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Mensaje</button>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    <span
                                                        class="caption-subject font-blue-madison bold uppercase">Usuarios</span>
                                                    <button class="btn btn-primary btn-md btn-circle"
                                                        data-target="#formulario_creacion" data-toggle="modal">Crear
                                                        Usuario</button>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                                <div id="formulario_creacion" class="modal fade" tabindex="-1"
                                                    data-width="400">
                                                    <div class="modal-dialog" style="left:0">
                                                        <form method="post" action="{{ route('create_user') }}">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-hidden="true"></button>
                                                                    <h4 class="modal-title">Crear usuario</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="nombre">Nombre</label>
                                                                            <p>
                                                                                <input id="nombre" name="nombre" type="text"
                                                                                    class="col-md-6 form-control">
                                                                            </p>
                                                                            <label for="apellidos">Apellidos</label>
                                                                            <p>
                                                                                <input id="apellidos" name="apellidos"
                                                                                    type="text"
                                                                                    class="col-md-6 form-control">
                                                                            </p>
                                                                            <label for="telefono">Teléfono</label>
                                                                            <p>
                                                                                <input id="telefono" name="telefono"
                                                                                    type="text"
                                                                                    class="col-md-6 form-control">
                                                                            </p>
                                                                            <label for="email">Email</label>
                                                                            <p>
                                                                                <input id="email" name="email" type="email"
                                                                                    class="col-md-6 form-control">
                                                                            </p>
                                                                            <label for="password">Contraseña</label>
                                                                            <p>
                                                                                <input id="password" name="password"
                                                                                    type="password"
                                                                                    class="col-md-6 form-control">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" data-dismiss="modal"
                                                                        class="btn dark btn-outline">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success">Crear</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label
                                                            class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle"
                                                                id="option1">Today</label>
                                                        <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle"
                                                                id="option2">Week</label>
                                                        <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle"
                                                                id="option2">Month</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Total </div>
                                                                <div class="number"> 2460 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <div id="sparkline_bar2"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> New </div>
                                                                <div class="number"> 719 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    @if (Session::has('message'))
                                                        <p
                                                            class="alert {{ Session::get('alert-class', 'alert-success') }}">
                                                            {{ Session::get('message') }}</p>
                                                    @endif
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2"> Nombre </th>
                                                                <th> Email </th>
                                                                <th> telefono </th>
                                                                <th> Acciones </th>
                                                            </tr>
                                                        </thead>
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
                                                                        data-toggle="modal"><i
                                                                            class="fa fa-edit"></i></a>
                                                                    <a href=" {{ route('destroy_user', $user->id) }}"><i
                                                                            class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <div id="stack1" class="modal fade" tabindex="-1"
                                                                data-width="400">
                                                                <div class="modal-dialog" style="left:0">
                                                                    <form method="post"
                                                                        action="{{ route('update_user', $user->id) }}">
                                                                        @csrf
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button"
                                                                                    class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-hidden="true"></button>
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
                                                                                            <input id="nombre" name="nombre"
                                                                                                type="text"
                                                                                                value="{{ $user->nombre }}"
                                                                                                class="col-md-6 form-control">
                                                                                        </p>
                                                                                        <label
                                                                                            for="apellido">Apellido</label>
                                                                                        <p>
                                                                                            <input id="apellidos"
                                                                                                name="apellidos" type="text"
                                                                                                value="{{ $user->apellidos }}"
                                                                                                class="col-md-6 form-control">
                                                                                        </p>
                                                                                        <label
                                                                                            for="telefono">Teléfono</label>
                                                                                        <p>
                                                                                            <input id="telefono"
                                                                                                name="telefono" type="text"
                                                                                                value="{{ $user->telefono }}"
                                                                                                class="col-md-6 form-control">
                                                                                        </p>
                                                                                        <label for="telefono">Email</label>
                                                                                        <p>
                                                                                            <input id="email" name="email"
                                                                                                type="text"
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
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
        </div>
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                    title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase
                    Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div> --}}
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
