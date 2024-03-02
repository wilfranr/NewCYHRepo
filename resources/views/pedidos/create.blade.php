@extends('adminlte::page')

@section('content')
    {{-- Info de pedido --}}
    <div class="mt-3 mb-5">
        <h4>
            <span class="badge badge-warning"><i class="fas fa-shopping-cart"></i>Pedido #{{ $ultimoPedido }}</span>
            <small class="float-right">Fecha y hora actual: {{ \Carbon\Carbon::now() }}</small><br>
        </h4>
    </div>
    {{-- Formulario de creación de pedido --}}
    <form action="{{ route('pedidos.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- Campos que se envian al controlador --}}
        <input type="hidden" name="tercero_id" id="tercero_id" value="">
        {{-- <input type="hidden" name="pedido_id" value=""> --}}
        <input type="hidden" name="estado" id="estado" value="Nuevo">
        <input type="hidden" name="maquina_id" id="maquina_id">
        <input type="hidden" name="puntos" value="">

        {{-- Botones de buscar y crear cliente antes de crear pedido --}}
        <div id="div-inicial">
            <div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
                <div class="text-center">
                    <div class="form-group">
                        <div class="callout callout-info">
                            <h5>Creación de Pedido</h5>

                            <p>Bienvenido <b>{{ Auth::user()->name }}.</b> Puedes buscar un cliente existente o crear uno
                                nuevo para comenzar con el pedido.</p>
                        </div>
                        {{-- Botón para buscar cliente --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalClientes">
                            <i class="fa fa-search" aria-hidden="true" id="btn-buscar-cliente"></i> Buscar Cliente
                        </button>

                        {{-- Dirigir a crear tercero --}}
                        <a href="{{ route('terceros.create') }}" class="btn btn-outline-primary">
                            <i class="fas fa-plus"></i> Crear Cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Botones de buscar y crear clientes --}}
        <div class="form-group" id="div-botones">
            {{-- Botón para buscar cliente --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalClientes">
                <i class="fa fa-search" aria-hidden="true" id="btn-buscar-cliente"></i> Buscar Cliente
            </button>

            {{-- Dirigir a crear tercero --}}
            <a href="{{ route('terceros.create') }}" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> Crear Cliente
            </a>
        </div>


        <!-- info cliente -->
        <div id="info-cliente">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    Datos del cliente
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        {{-- Datos básicos --}}
                        <div class="col-3">
                            <h2 class="lead"><b><a id="link_cliente" href="" target="_blank"><strong
                                            id="nombre_cliente"></strong></a></b></h2>

                            <p class="text-muted text-sm">
                                <b>
                                    <i class="fas fa-lg fa-id-card"></i> <span id="tipo_documento"></span>
                                </b><span id="documento"></span>-<span id="dv"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span><i class="fas fa-lg fa-building"></i> Dirección:</span>
                                </b> <span id="direccion_cliente"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span class=""><i class="fa fa-phone" aria-hidden="true"></i>
                                        Teléfono:</span>
                                </b>
                                <a href="" id="wp_cliente" target="_blank">
                                    <span id="telefono"></span>
                                </a>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                                </b>
                                <a href="" id="link_email">
                                    <span id="email"></span>
                                </a>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span class=""><i class="fa fa-lg fa-envelope"></i> Email Facturación:</span>
                                </b>
                                <a href="" id="link_email_facturacion">
                                    <span id="email_facturacion"></span>
                                </a>
                            </p>
                        </div>

                        {{-- Contactos --}}
                        <div class="col-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Contactos del cliente</p>

                                {{-- Boton modal para crear contacto --}}
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#modalContacto" title="Crear Contacto"><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="form-group">
                                <div class="d-flex align-items-center">
                                    <select name="contactoTercero" id="contactoTercero" class="form-control">
                                        <option value="">Seleccione</option>
                                    </select>
                                </div>
                            </div>
                            <div id="divContactoTercero" class="ml-2">
                                <p class="text-muted text-sm">
                                    <b>
                                        <i class="fab fa-2x fa-whatsapp"></i>
                                        <span class="">Teléfono:</span>
                                    </b>
                                    <a href="" id="wp_contacto" target="_blank">
                                        <span id="contacto_telefono"></span>
                                    </a>
                                </p>
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                                    </b>
                                    <a href="" id="link_contacto_email">
                                        <span id="contacto_email"></span>
                                    </a>
                                </p>
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-briefcase"></i>
                                            Cargo:</span>
                                    </b><span id="cargo_contacto"></span>
                                </p>
                            </div>
                        </div>

                        {{-- Máquinas --}}
                        <div class="col-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Máquinas del cliente</p>
                                <div>
                                    {{-- Botón para buscar las máquinas del tercero --}}
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                        id="boton-buscar-maquinas" title="Buscar Máquinas Asociadas al Cliente"
                                        data-toggle="modal" data-target="#modalBuscarMaquinas"><i class="fa fa-search"
                                            aria-hidden="true"></i>
                                    </button>

                                    {{-- Boton modal para crear maquina --}}
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#modalCrearMaquinas" title="Crear Máquina y Asociarla al Cliente"><i
                                            class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                {{-- Tooltip Máquina --}}
                                <h2 class="lead">
                                    <b>
                                        <a id="link_maquina" href="" target="_blank">
                                            <strong id="nombre_maquina"></strong>
                                        </a>
                                    </b>
                                    <i class="fa fa-question-circle text-warning" aria-hidden="true"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Puede buscar una máquina en la lista de máquinas asociadas al cliente o crearle una nueva."></i>
                                </h2>

                            </div>
                            <p class="text-muted text-sm">
                                <b><span>Marca:</span></b>
                                <span id="marca"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Modelo:</span></b>
                                <span id="modelo"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Serie:</span></b>
                                <span id="serie"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Arreglo:</span></b>
                                <span id="arreglo"></span>
                            </p>
                        </div>

                        {{-- Fotos de máquina --}}
                        <div class="col-3 divFotosMaquina">
                            {{-- mostrar foto de imágen de máquina --}}
                            <div class="text-center mb-3">
                                <a href="" id="foto_maquina_link" target="_blank">
                                    <img src="" class="img-circle img-fluid" id="foto_maquina"
                                        alt="Foto Máquina" width="200">
                                </a>
                            </div>
                            {{-- mostrar foto de imágen de Id de máquina --}}
                            <div class="text-center">
                                <a href="" id="foto_id_link" target="_blank">
                                    <img src="" class="" id="foto_id" width="200" height="100"
                                        alt="Id Máquina">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Alerta para seleccionar máquina --}}
        <div id="alerta-seleccionar-maquina">
            <div class="callout callout-warning">
                <strong>Aviso!</strong> Antes de agregar artículos al pedido debes seleccionar la máquina del cliente.
                </button>
            </div>
        </div>

        {{-- tabla articulos --}}
        <div id="articulos">
            {{-- <input type="hidden" name="articulos-temporales" id="articulos-temporales"> --}}
            <div class="card">
                <div class="card-header">
                    Artículos del pedido
                </div>
                <div class="card-body">
                    {{-- tabla --}}
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Ítem</th>
                                <th scope="col">Referencia</th>
                                <th scope="col">Sistema</th>
                                <th scope="col">Comentarios de artículo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Fotos (puede agregar varias)</th>
                            </tr>
                        </thead>
                        <tbody id="articulos-body">
                            <tr>
                                <td><strong>1</strong></td>
                                <td>
                                    <input type="text" name="referencia1" class="form-control" required>
                                </td>
                                <td>
                                    <select name="sistema1" class="form-control">
                                        <option value="">Ninguno</option>
                                        @foreach ($sistemas as $id => $sistema)
                                            <option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <textarea name="comentarioArticulo1" cols="20" rows="1" class="form-control" placeholder=""
                                        data-toggle="tooltip" data-placement="top"
                                        title="Ingrese cualquier información relevante del artículo. Ej. Nombre, descripción, especificaciones, etc"></textarea>
                                </td>
                                <td>
                                    <input type="number" name="cantidad1" class="form-control" value="1" required>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Cargar</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                name="fotos1[]" multiple>
                                            <label class="custom-file-label" for="inputGroupFile01">Seleccionar
                                                Imágenes</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-left">
                    <button type="button" id="agregar-fila" class="btn btn-outline-success">Agregar artículo</button>
                </div>
                <button type="button" class="btn btn-outline-success btn-sm" id="boton-agregar-referencias"
                    title="Agregar areferencias en masa" data-toggle="modal" data-target="#referenciasModal"
                    data-fila="1">Agregar referencias desde excel
                </button>
                <!-- Tabla para mostrar las referencias ingresadas -->
                <div class="mt-4" id="div-referencias">
                    <div class="row">
                        <div class="col-3">
                            <h3>Referencias Ingresadas</h3>
                        </div>
                        <div class="col-1">
                            {{-- boton limpiar --}}
                            <button type="button" class="btn btn-outline-danger float-right" id="limpiar-referencias"
                                title="Limpiar referencias ingresadas">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody id="referenciasTableBody">
                            <!-- Aquí se llenarán dinámicamente las filas de la tabla -->
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <input type="hidden" name="referenciasArray" id="referenciasArray">

        {{-- comentarios del pedido --}}
        <div id="comentariosPedido">
            <label for="comentarioPedido">Comentarios del pedido</label>
            <textarea name="comentarioPedido" id="comentarioPedido" cols="20" rows="5" class="form-control"
            data-toggle="tooltip" data-placement="top"
            title="Ingrese cualquier información relevante del pedido. Ej. repuesto, tipo de máquina, solicitudes específicas, recomendaciones, etc"></textarea>
            
            <div class="ml-auto">
                <button type="submit" class="btn btn-primary mt-3 float-right"><i class="fa fa-cart-plus"
                        aria-hidden="true"></i>
                    Crear pedido</button>
            </div>

        </div>

    </form>

    {{-- Modal buscar clientes --}}
    <div class="modal fade" id="modalClientes" tabindex="-1" aria-labelledby="modalClientesLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalClientesLabel">Buscar cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="mb-3" name="search" id="search" class="form-control"
                        placeholder="Buscar">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo Documento</th>
                                <th>No. Documento</th>
                                <th>Ciudad</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th><i class="fa fa-check"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Terceros as $tercero)
                                <tr>
                                    <td>{{ $tercero->id }}</td>
                                    <td>{{ $tercero->nombre }}</td>
                                    <td>{{ $tercero->tipo_documento }}</td>
                                    <td>{{ $tercero->numero_documento }}</td>
                                    <td>{{ $tercero->ciudad }}</td>
                                    <td>{{ $tercero->telefono }}</td>
                                    <td>{{ $tercero->email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning seleccionar-cliente"
                                            data-id="{{ $tercero->id }}" data-nombre="{{ $tercero->nombre }}"
                                            data-tipo_documento="{{ $tercero->tipo_documento }}"
                                            data-identificacion="{{ $tercero->numero_documento }}"
                                            data-direccion="{{ $tercero->direccion }}"
                                            data-telefono="{{ $tercero->telefono }}" data-email="{{ $tercero->email }}"
                                            data-email-facturacion="{{ $tercero->email_factura_electronica }}"
                                            data-dv="{{ $tercero->dv }}" data-dismiss="modal"
                                            data-bs-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal buscar máquinas del cliente --}}
    <div class="modal fade" id="modalBuscarMaquinas" tabindex="-1" aria-labelledby="modalBuscarMaquinasLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="modalBuscarMaquinasLabel">Maquinas Asociadas a <span
                            id="tercero_nombre_maquina"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <table id="maquinas" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Serie</th>
                            <th>Arreglo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal buscar referencias de artículos --}}
    {{-- <div class="modal fade" id="modalBuscarReferencias" tabindex="-1" aria-labelledby="modalBuscarReferenciasLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="modalBuscarRerenciasLabel">Referencias</h5>
                    <button type="button" class="close" data-dismiss="modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <table id="referencias" class="table table-hover p-3">
                    <thead>
                        <tr>
                            <th>Referencia</th>
                            <th>Definición</th>
                            <th>Fabricante</th>
                            <th>Cambio</th>
                            <th>Foto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articulos as $articulo)
                            <tr>
                                <td>{{ $articulo->referencia }}</td>
                                <td>{{ $articulo->definicion }}</td>
                                <td>{{ $articulo->marca }}</td>
                                <td>
                                    <ul>
                                        @foreach ($articulo->referencias as $referencia)
                                            <li>{{ $referencia->referencia }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                        target="_blank">
                                        <img src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                            alt="Foto de la lista" width="100px">
                                    </a>
                                </td>
                                <td><button type="button" class="btn btn-warning seleccionar-referencia"
                                        data-dismiss="modal" data-bs-dismiss="modal" data-fila="1"
                                        data-referencia="{{ $articulo->referencia }}"
                                        data-definicion="{{ $articulo->definicion }}">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    {{-- Modal crear máquina --}}
    <div class="modal fade" id="modalCrearMaquinas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Crear máquina para <span id="tercero-nombre"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('pedidos.crearMaquina') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" id="tercero_id_maquina" name="tercero_id_maquina">

                                <div class="form-group row">
                                    <label for="tipoMaquina"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="tipo_maquina" name="tipo_maquina">
                                            <option value="">Seleccione un tipo de máquina</option>
                                            @foreach ($tipo_maquina as $t)
                                                <option value="{{ $t->nombre }}">{{ $t->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Marca Fabricante') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="marca" name="marca" required>
                                            <option value="">Seleccione una marca fabricante</option>
                                            {{-- traer todas las marcas --}}
                                            @foreach ($marcas as $m)
                                                <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="modelo"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="modelo" id="modelo">
                                            <option value="">Seleccione un modelo</option>
                                            @foreach ($modelo as $mo)
                                                <option value="{{ $mo->nombre }}">{{ $mo->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="serie"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="serie" id="serie">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="arreglo"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Arreglo') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="arreglo" id="arreglo">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fotoMaquina"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Foto Maquina') }}</label>
                                    <div class="col-md-6">
                                        {{-- @if ('') --}}
                                        <input type="file" class="form-control" name="fotoMaquina" id="fotoMaquina">
                                        <img id="preview" src="#" alt="Vista previa de la imagen"
                                            style="max-width: 200px; max-height: 200px;">
                                        <button id="borrar-foto2" type="button" style="display: none;"
                                            class="btn btn-outline-danger">X</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fotoId"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Foto ID') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="fotoId" id="fotoId">
                                        <img id="preview2" src="#" alt="Vista previa de la imagen"
                                            style="max-width: 200px; max-height: 200px;">
                                        <button id="borrar-foto" type="button" style="display: none;"
                                            class="btn btn-outline-danger">X</button>

                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal crear contacto --}}
    <div class="modal fade" id="modalContacto">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Crear contacto para <span id="tercero-nombre2"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('pedidos.crearContacto') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" id="tercero_id_contacto" name="tercero_id_contacto">

                                <div class="form-group">
                                    <label for="nombre">{{ __('Nombre') }}</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="telefono">{{ __('Telefono') }}</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="cargo">{{ __('Cargo') }}</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" required>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para ingresar referencias -->
    <div class="modal fade" id="referenciasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar Referencias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea id="referenciasTextarea" class="form-control" rows="5"
                        placeholder="Ingrese las referencias separadas por un salto de línea"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarReferencias()">Guardar</button>
                </div>
            </div>
        </div>
        
    </div>
@endsection
@section('js')
    <script>
        //mostrar div-referencias al abrir modal
        $('#referenciasModal').on('show.bs.modal', function(event) {
            $('#div-referencias').show();
        });
        function guardarReferencias() {
            // Obtener las referencias del textarea
            var referenciasConCantidad = document.getElementById('referenciasTextarea').value;

            // Dividir las referencias por un salto de línea
            var lineas = referenciasConCantidad.split('\n');

            // Procesar cada línea
            var referenciasArray = [];

            for (var i = 0; i < lineas.length; i++) {
                // Dividir cada línea en referencia y cantidad
                var partes = lineas[i].split(/\s+/);

                // Obtener la referencia y la cantidad
                var referencia = partes[0];
                var cantidad = partes[1] || ''; // Puede no haber cantidad

                // Añadir referencia y cantidad al array
                referenciasArray.push({
                    referencia: referencia,
                    cantidad: cantidad
                });
            }

            console.log('Lista de referencias ingresadas',referenciasArray);

            // Limpiar la tabla antes de agregar nuevas filas
            document.getElementById('referenciasTableBody').innerHTML = '';

            // Agregar las referencias a la tabla
            for (var i = 0; i < referenciasArray.length; i++) {
                var referencia = referenciasArray[i].referencia;
                var cantidad = referenciasArray[i].cantidad;

                // Agregar una nueva fila a la tabla
                var newRow = document.getElementById('referenciasTableBody').insertRow(i);
                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);

                // Agregar datos a las celdas
                cell1.innerHTML = referencia;
                cell2.innerHTML = cantidad;
            }


            // Guardar las referencias en un campo oculto
            document.getElementById('referenciasArray').value = JSON.stringify(referenciasArray);

            // Cerrar el modal
            $('#referenciasModal').modal('hide');
        }
        //limpiar referencias
        $('#limpiar-referencias').click(function() {
            $('#referenciasTableBody').empty();
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        //busqueda dinámica en tabla terceros
        $(document).ready(function() {

            //ocultar div info-cliente
            $('#info-cliente').hide();
            //ocultar botoon de agregar articulo
            $('#boton-agregar-articulo').hide();
            // ocultar div comentarios de pedido
            $('#comentariosPedido').hide();
            //ocultar div fotod maquinas
            $('.divFotosMaquina').hide();
            //ocultar div articulos
            $('#articulos').show();
            //ocultar alerta de seleccionar maquina
            $('#alerta-seleccionar-maquina').hide();
            //Ocultar botones
            $('#div-botones').hide();
            //ocultar div-referencias
            $('#div-referencias').hide();


            // Capturar el evento de clic en el botón "Seleccionar" de la tabla de clientes
            $(document).on('click', '.seleccionar-cliente', function() {
                //ocultar div-inicial y mostrar div-botones
                $('#div-inicial').hide();
                $('#div-botones').show();

                //limpiar datos contactoTercero
                $('#contactoTercero').empty();
                $('#contacto_telefono').html('');
                $('#contacto_email').html('');

                //limpiar datos de máquinas
                $('#maquinas tbody').empty();
                $('#maquina_id').val('');
                $('#link_maquina').attr('href', '');
                $('#nombre_maquina').html('');
                $('#marca').html('');
                $('#modelo').html('');
                $('#serie').html('');
                $('#arreglo').html('');
                $('#foto_maquina_link').attr('href', '');
                $('#foto_id_link').attr('href', '');
                $('#foto_maquina').attr('src', '');
                $('#foto_id').attr('src', '');

                //mostrar div info-cliente
                $('#info-cliente').show();
                //mostrar alerta de seleccionar máquina
                $('#alerta-seleccionar-maquina').show();

                // Actualizar los datos del formulario de crear pedido con los datos del cliente seleccionado
                $('#tercero_id').val($(this).data('id'));
                $('#link_cliente').attr('href', '/terceros/' + $(this).data('id') + '/edit');
                $('#cliente_nombre').val($(this).data('nombre'));
                $('#numero_documento').val($(this).data('identificacion'));
                $('#documento').html($(this).data('identificacion'));
                $('#direccion').val($(this).data('direccion'));
                $('#direccion_cliente').html($(this).data('direccion'));
                $('#telefono').val($(this).data('telefono'));
                $('#telefono').html($(this).data('telefono'));
                $('#wp_cliente').attr('href', 'https://wa.me/+57' + $(this).data('telefono'));
                $('#email').html($(this).data('email'));
                $('#link_email').attr('href', 'mailto:' + $(this).data('email'));
                $('#email_facturacion').html($(this).data('email-facturacion'));
                $('#link_email_facturacion').attr('href', 'mailto:' + $(this).data('email-facturacion'));
                //actualizar el campo tercero en el modal maquinas
                $('#tercero_id_maquina').val($(this).data('id'));
                $('#tercero_nombre_maquina').html($(this).data('nombre'));
                $('#tercero_id_contacto').val($(this).data('id'));
                $('#tercero-nombre').html($(this).data('nombre'));
                $('#tercero-nombre2').html($(this).data('nombre'));
                $('#nombre_cliente').html($(this).data('nombre'));
                $('#tipo_documento').html($(this).data('tipo_documento'));
                $('#dv').html($(this).data('dv'));
                cargarContactos();
                cargarMarcas();
                cargarMaquinas();
                //mostrar boton de agregar articulo
                $('#boton-agregar-articulo').show();
            });

            //funcion para cargar las marcas asociadas al tercero despues de seleccionarlo
            function cargarMarcas() {
                // Obtener el valor del ID del tercero seleccionado
                var tercero_id = $('#tercero_id').val();

                // Realizar una petición AJAX para obtener las marcas del tercero
                $.ajax({
                    url: `/terceros/${tercero_id}/marcas`,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#filtro_marca').empty();
                        $('#filtro_marca').append($('<option>', {
                            value: '',
                            text: 'Todas'
                        }));
                        response.forEach(marca => {
                            $('#filtro_marca').append($('<option>', {
                                value: marca.nombre,
                                text: marca.nombre
                            }));
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            };

            // Función para cargar las máquinas asociadas al cliente
            function cargarMaquinas() {
                //llenar tabla con maquinas del tercero
                var tercero_id = $('#tercero_id').val();
                var filtro_marca = $('#filtro_marca').val(); // Obtener el valor seleccionado en el filtro de marca

                axios.get(`/terceros/${tercero_id}/maquinas`)
                    .then(response => {
                        $('#maquinas tbody').empty();
                        if (response.data.length === 0) {
                            $('#maquinas tbody').append(`
                            <tr>
                                <td colspan="8">No se encontraron máquinas asociadas al cliente, debe crear al menos una.</td>

                            </tr>
                            `);
                        } else {
                            var maquinas = response.data;
                            response.data.forEach(maquina => {
                                $('#maquinas tbody').append(`
                            <tr>
                                <td>${maquina.tipo}</td>
                                <td>${maquina.marca}</td>
                                <td>${maquina.modelo}</td>
                                <td>${maquina.serie}</td>
                                <td>${maquina.arreglo}</td>
                                <td><button type="button" class="btn btn-sm btn-warning seleccionar-maquina" data-id="${maquina.id}" data-tipo="${maquina.tipo}" data-marca="${maquina.marca}" data-modelo="${maquina.modelo}" data-serie="${maquina.serie}" data-arreglo="${maquina.arreglo}" data-foto="${maquina.foto}" 
                                    data-foto_id="${maquina.fotoId}" data-dismiss="modal" data-bs-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                </tr>
                                `);
                            });
                        }
                    })
                    .catch(error => {
                        console.error(error);

                    })
            }

            //capturar evento de seleccionar maquina
            $(document).on('click', '.seleccionar-maquina', function() {
                //mostrar div fotos maquina
                $('.divFotosMaquina').show();
                //mostrar div artículos
                $('#articulos').show();
                //ocultar alerta de seleccionar maquina
                $('#alerta-seleccionar-maquina').hide();
                //mostrar div comentarios de pedido
                $('#comentariosPedido').show();

                // Actualizar los datos del formulario de crear pedido con los datos de la maquina seleccionada
                $('#maquina_id').val($(this).data('id'));
                $('#link_maquina').attr('href', '/maquinas/' + $(this).data('id') + '/edit');
                $('#nombre_maquina').html($(this).data('tipo'));
                $('#marca').html($(this).data('marca'));
                $('#modelo').html($(this).data('modelo'));
                $('#serie').html($(this).data('serie'));
                $('#arreglo').html($(this).data('arreglo'));
                $('#foto_maquina_link').attr('href', '/storage/maquinas/' + $(this).data('foto'));
                $('#foto_id_link').attr('href', '/storage/maquinas/' + $(this).data('foto_id'));
                $('#foto_maquina').attr('src', '/storage/maquinas/' + $(this).data('foto'));
                $('#foto_id').attr('src', '/storage/maquinas/' + $(this).data('foto_id'));
            });

            // Capturar el evento de cambio en el campo de búsqueda de clientes
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#modalClientes tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            //cargar contactos de tercero
            function cargarContactos() {
                // Obtener el valor del ID del tercero seleccionado
                const tercero_id = document.getElementById("tercero_id").value;
                // Hacer una petición Axios al servidor para obtener los contactos del tercero
                axios.get(`/terceros/${tercero_id}/contactos`)
                    .then(response => {
                        document.getElementById("contactoTercero").innerHTML += `
                        <option value="">Seleccionar contacto</option>
                            `;
                        response.data.forEach(contacto => {
                            // Agregar una opción al select de contactos
                            document.getElementById("contactoTercero").innerHTML += `
                                <option value="${contacto.id}">${contacto.nombre}</option>
                            `;
                            //cambiar telefono de contacto segun seleccione
                            $('#contactoTercero').change(function() {
                                //mostrar botn de whatsapp
                                $('#wp_contacto').show();
                                var contacto_id = $(this).val();
                                console.log(contacto_id);
                                // Buscar el contacto en la lista de contactos
                                var contactoEncontrado = response.data.find(function(
                                    contacto) {
                                    return contacto.id == contacto_id;
                                });
                                console.log(contactoEncontrado);
                                if (contactoEncontrado) {
                                    $('#wp_contacto').attr('href', 'https://wa.me/+57' +
                                        contactoEncontrado.telefono);
                                    $('#contacto_telefono').html(contactoEncontrado.telefono);
                                    $('#contacto_email').html(contactoEncontrado.email);
                                    $('#link_contacto_email').attr('href', 'mailto:' +
                                        contactoEncontrado.email);
                                    $('#cargo_contacto').html(contactoEncontrado.cargo);
                                } else {
                                    console.log('No se encontró el contacto');
                                }
                            });
                        });
                    });
            };

            // Área de creación de pedidos
            let contadorArticulos = 2;
            //index
            let index = 1;

            // Agregar una función para agregar una nueva fila
            function agregarFila() {
                $(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });

                index++;
                // Crear una nueva fila
                const nuevaFila = `
                    <tr>
                        <td><strong>` + index + `</strong></td>
                    <td>
                        <div class="row">
                        <div class="col-10">
                            <input type="text" name="referencia${contadorArticulos}" class="form-control referencia${contadorArticulos}"
                            id="referencia${contadorArticulos}" readonly>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-outline-success btn-sm" title="Buscar artículos por referencia"
                            data-toggle="modal" data-target="#modalBuscarReferencias" data-fila="${contadorArticulos}"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        </div>
                    </td>
                    <td>
                        <select name="sistema${contadorArticulos}" class="form-control">
                        <option value="">Ninguno</option>
                        @foreach ($sistemas as $sistema)
                            <option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>
                        @endforeach
                        </select>
                    </td>
                    <td>
                        <textarea name="comentarioArticulo${contadorArticulos}" cols="20" rows="1" class="form-control" data-toggle="tooltip" data-placement="top"
                                        title="Ingrese cualquier información relevante del artículo. Ej. Nombre, descripción, especificaciones, etc"></textarea>
                    </td>
                    <td>
                        <input type="number" name="cantidad${contadorArticulos}" class="form-control" value="1" required>
                    </td>
                    <td>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cargar</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile${contadorArticulos}" name="fotos${contadorArticulos}[]"
                            multiple>
                            <label class="custom-file-label" for="inputGroupFile${contadorArticulos}">Seleccionar Imágenes</label>
                        </div>
                        </div>
                    </td>
                    </tr>
                `;

                // Agregar la nueva fila
                $('#articulos-body').append(nuevaFila);

                $('#contador').val(contadorArticulos);
                // Incrementar el contador
                contadorArticulos++;



            }

            // Evento para agregar una nueva fila
            $('#agregar-fila').on('click', agregarFila);

            // Capturar evento de seleccionar referencia
            $(document).on('click', '.seleccionar-referencia', function() {
                NuevocontadorArticulos = contadorArticulos - 1;
                // obtener data de referencia
                var referencia = $(this).data('referencia');
                console.log('Referencia: ' + referencia);
                // obtener id de referencia actual
                var fila = $(this).data('fila');
                console.log('Fila: ' + fila);

                //obtener id de fila actual
                console.log('Referencia Id: ' + `#referencia${NuevocontadorArticulos}`);

                // guardar referencia en el input #referencia${contadorArticulos}
                $(`#referencia${NuevocontadorArticulos}`).val(referencia);
            });
        });


        // DataTables
        $(function() {
            $('#referencias').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "paging": true,
            });
            $('#maquinas').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "paging": true,
            });

        });
    </script>
@endsection
