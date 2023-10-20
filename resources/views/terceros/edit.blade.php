@extends('adminlte::page')

@section('content')
    <div class="content-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">{{ $tercero->nombre }}</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    {{-- Tab Perfil --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-perfil-tab" data-toggle="pill"
                            href="#custom-tabs-one-perfil" role="tab" aria-controls="custom-tabs-one-perfil"
                            aria-selected="true">Perfil</a>
                    </li>
                    {{-- Tab Maquinas --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-maquinas-tab" data-toggle="pill"
                            href="#custom-tabs-one-maquinas" role="tab" aria-controls="custom-tabs-one-maquinas"
                            aria-selected="false">
                            @if ($tercero->tipo == 'Cliente')
                                Máquinas
                            @else
                                Marcas/Sistemas
                            @endif
                        </a>
                    </li>
                    {{-- Tab Contactos --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-contactos-tab" data-toggle="pill"
                            href="#custom-tabs-one-contactos" role="tab" aria-controls="custom-tabs-one-contactos"
                            aria-selected="false">Contactos</a>
                    </li>
                    {{-- Tab Pedidos --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-pedidos-tab" data-toggle="pill"
                            href="#custom-tabs-one-pedidos" role="tab" aria-controls="custom-tabs-one-pedidos"
                            aria-selected="false">Pedidos</a>
                    </li>
                    {{-- Tab Estadísticas --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-estadisticas-tab" data-toggle="pill"
                            href="#custom-tabs-one-estadisticas" role="tab" aria-controls="custom-tabs-one-estadisticas"
                            aria-selected="false">Estadísticas</a>
                    </li>
                    {{-- Tab Archivos --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-archivos-tab" data-toggle="pill"
                            href="#custom-tabs-one-archivos" role="tab" aria-controls="custom-tabs-one-archivos"
                            aria-selected="false">Archivos</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('terceros.update', $tercero->id) }}" id="form"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        {{-- Perfil de tercero --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-perfil" role="tabpanel"
                            aria-labelledby="custom-tabs-one-perfil-tab">
                            <div class="card card-solid">
                                <div class="card-body pb-0">

                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="row">
                                                {{-- Columna 1 --}}
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nombre">Razon social</label>
                                                        <input type="text" name="nombre" id="nombre"
                                                            class="form-control" value="{{ $tercero->nombre }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion">Dirección</label>
                                                        <input type="text" name="direccion" id="direccion"
                                                            class="form-control" value="{{ $tercero->direccion }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control" value="{{ $tercero->email }}">
                                                    </div>
                                                    {{-- Teléfono --}}
                                                    <div class="form-group">
                                                        <label for="telefono">Teléfono</label>
                                                        <input type="text" name="telefono" id="telefono"
                                                            class="form-control" value="{{ $tercero->telefono }}">
                                                    </div>

                                                    {{-- Pais --}}
                                                    <div class="form-group">
                                                        <label for="pais_id">País</label>
                                                        {{-- select para pais --}}

                                                    </div>
                                                    <p>{{ $tercero->PaisCodigo }}</p>
                                                </div>
                                                {{-- Columna 2 --}}
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="tipo">Tipo Tercero</label>
                                                        <select name="tipo" id="tipo" class="form-control">
                                                            <option value="">Seleccione un tipo de tercero</option>
                                                            <option value="Cliente"
                                                                {{ $tercero->tipo == 'Cliente' ? 'selected' : '' }}>
                                                                Cliente</option>
                                                            <option value="Proveedor"
                                                                {{ $tercero->tipo == 'Proveedor' ? 'selected' : '' }}>
                                                                Proveedor</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="numero_documento">Identificación:
                                                            {{ $tercero->tipo_documento }}</label>
                                                        @if ($tercero->tipo_documento == 'NIT')
                                                            <input type="text" name="numero_documento"
                                                                id="numero_documento" class="form-control"
                                                                value="{{ $tercero->numero_documento }}-{{ $tercero->dv }}"
                                                                readonly>
                                                        @else
                                                            <input type="text" name="numero_documento"
                                                                id="numero_documento" class="form-control"
                                                                value="{{ $tercero->numero_documento }}" readonly>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email-facturacion">Email de Facturación</label>
                                                        <input type="email" name="email_facturacion"
                                                            id="email-facturacion" class="form-control"
                                                            value="{{ $tercero->email_factura_electronica }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sitioWeb">Sitio Web</label>
                                                        <input type="text" name="sitioWeb" id="sitioWeb"
                                                            class="form-control" value="{{ $tercero->sitio_web }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ciudad">Ciudad</label>

                                                        <select name="ciudad" id="ciudad"
                                                            class="form-control select2" required>
                                                            <option value="">Seleccione una ciudad</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        {{-- Maquinas o Marcas/Sistemas asociadas al tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-maquinas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-admin-tab">
                            <div class="form-group border border-warning mt-4 p-3 mx-auto">
                                @if ($tercero->tipo == 'Cliente')
                                    @if ($tercero->maquinas->isEmpty())
                                        <p>No hay máquinas registradas</p>
                                    @else
                                        <label for="maquina">Máquinas asociadas</label>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tipo</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Serie</th>
                                                    <th>Foto</th>
                                                    <th>Foto Id</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tercero->maquinas as $maquina)
                                                    <tr>
                                                        <td><a
                                                                href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->tipo }}</a>
                                                        </td>
                                                        <td>
                                                            @foreach ($maquina->marcas as $marcaMaquina)
                                                                <a href="{{ route('maquinas.edit', $maquina->id) }}">
                                                                    {{ $marcaMaquina->nombre }}
                                                                </a>
                                                            @endforeach
                                                        </td>
                                                        <td><a
                                                                href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->modelo }}</a>
                                                        </td>
                                                        <td><a
                                                                href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->serie }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                                target="_blank">
                                                                <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                                    alt="Foto de la máquina" width="30%">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('storage/maquinas/' . $maquina->foto_id) }}"
                                                                target="_blank">
                                                                <img src="{{ asset('storage/maquinas/' . $maquina->foto_id) }}"
                                                                    alt="Foto de la máquina" width="10%">
                                                            </a>
                                                        </td>
                                                        <td><button class="btn btn-outline-danger btn-xs"
                                                                id="btn-agregar">
                                                                <ion-icon name="close"></ion-icon>
                                                            </button></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                    <button class="btn btn-outline-primary mt-2" id="btnAgregar"
                                        type="button">Agregar</button>
                                    <div class="form-group agregarMaquina">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mt-3">
                                                    <label for="maquina_id">Asociar máquinas:</label>
                                                    <select name="maquina_id[]" id="maquina_id"
                                                        class="form-select select2" multiple style="width: 100%">

                                                        @foreach ($maquinas as $maquina)
                                                            <option value="{{ $maquina['id'] }}">{{ $maquina['text'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    {{-- Boton modal para crear maquina --}}
                                                    <button type="button" class="btn btn-outline-primary mt-2"
                                                        data-toggle="modal" data-target="#modalMaquinas"><i
                                                            class="fa fa-plus" aria-hidden="true"></i>
                                                        Crear Maquina
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                                @if ($tercero->tipo == 'Proveedor')
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            @if ($tercero->sistemas->isEmpty())
                                            <div class="card" style="width: 18rem;">
                                                <div
                                                    class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                                    <h5>Sistemas asociados</h5>
                                                    {{-- Boton modal para agregar sistema --}}
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#modalAgregarSistema"
                                                        title="Agregar Sistema"><i class="fa fa-plus"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#modalAsociarSistema"
                                                        title="Asociar sistema existente"><i class="fa fa-search"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <p>No hay sistemas registrados</p>
                                            </div>
                                            @else
                                                <div class="card" style="width: 18rem;">
                                                    <div
                                                        class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                                        <h5>Sistemas asociados</h5>
                                                        {{-- Boton modal para agregar sistema --}}
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-toggle="modal" data-target="#modalAgregarSistema"
                                                            title="Agregar Sistema"><i class="fa fa-plus"
                                                                aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-toggle="modal" data-target="#modalAsociarSistema"
                                                            title="Asociar sistema existente"><i class="fa fa-search"
                                                                aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <ul class="list-group list-group-flush">
                                                            @foreach ($tercero->sistemas as $sistema)
                                                                <li class="list-group-item">
                                                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->nombre }}</a>
                                                                    
                                                                    {{-- Formulario para desasociar sistema --}}
                                                                    <form action="{{ route('terceros.desasociarSistema', $sistema->id) }}"
                                                                        method="POST" style="display: inline">
                                                                        @csrf
                                                                        <input type="hidden" name="tercero_id"
                                                                            value="{{ $tercero->id }}">
                                                                        <input type="hidden" name="sistema_id"
                                                                            value="{{ $sistema->id }}">
                                                                        <button type="submit"
                                                                            class="btn btn-outline-danger btn-xs"
                                                                            title="Desasociar sistema">
                                                                            <ion-icon name="close"></ion-icon>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                        
                                                </div>
                                            @endif
                                        </div>
                                        <div>

                                            @if ($tercero->marcas->isEmpty())
                                            <div class="card" style="width: 18rem;">
                                                <div
                                                    class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                                    <h5>Marcas asociadas</h5>
                                                    {{-- Boton modal para agregar marca --}}
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#modalAgregarMarca"
                                                        title="Agregar Marca"><i class="fa fa-plus"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                    {{-- Boton para asociar marca --}}
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#modalAsociarMarca"
                                                        title="Asociar marca existente"><i class="fa fa-search"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                
                                                <p>No hay marcas registradas</p>
                                            </div>
                                            @else
                                                <div class="card" style="width: 18rem;">
                                                    <div
                                                        class="card-header bg-secondary d-flex justify-content-between align-items-center">
                                                        <h5>Marcas asociadas</h5>
                                                        {{-- Boton modal para agregar marca --}}
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-toggle="modal" data-target="#modalAgregarMarca"
                                                            title="Agregar Marca"><i class="fa fa-plus"
                                                                aria-hidden="true"></i>
                                                        </button>
                                                        {{-- Boton para asociar marca --}}
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-toggle="modal" data-target="#modalAsociarMarca"
                                                            title="Asociar marca existente"><i class="fa fa-search"
                                                                aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        @foreach ($tercero->marcas as $marcaTercero)
                                                            <li class="list-group-item">
                                                                <a href="{{ route('marcas.edit', $marcaTercero->id) }}">
                                                                    {{ $marcaTercero->nombre }}
                                                                </a>
                                                                {{-- formulario para desasociar marca --}}
                                                                <form
                                                                    action="{{ route('terceros.desasociarMarca', $marcaTercero->id) }}"
                                                                    method="POST" style="display: inline">
                                                                    @csrf
                                                                    <input type="hidden" name="tercero_id"
                                                                        value="{{ $tercero->id }}">
                                                                    <input type="hidden" name="marca_id"
                                                                        value="{{ $marcaTercero->id }}">
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-xs"
                                                                        title="Desasociar marca">
                                                                        <ion-icon name="close"></ion-icon>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- Contactos del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-contactos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-contactos-tab">
                            @if ($tercero->contactos->isEmpty())
                            @else
                                @foreach ($tercero->contactos as $contacto)
                                    {{-- contacto 1 --}}
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mt-3">Contacto {{ $loop->iteration }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="nombre_contacto_{{ $loop->iteration }}">Nombre:</label>
                                                    <input type="text" name="nombre_contacto_{{ $loop->iteration }}"
                                                        id="nombre_contacto_{{ $loop->iteration }}" class="form-control"
                                                        value="{{ $contacto->nombre }}" required>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label
                                                        for="telefono_contacto_{{ $loop->iteration }}">Teléfono:</label>
                                                    <input type="text" name="telefono_contacto_{{ $loop->iteration }}"
                                                        id="telefono_contacto_{{ $loop->iteration }}"
                                                        class="form-control" value="{{ $contacto->telefono }}">

                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="email_contacto_{{ $loop->iteration }}">Email:</label>
                                                    <input type="text" name="email_contacto_{{ $loop->iteration }}"
                                                        id="email_contacto_{{ $loop->iteration }}" class="form-control"
                                                        value="{{ $contacto->email }}" required>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="cargo_contacto_{{ $loop->iteration }}">Cargo:</label>
                                                    <input type="text" name="cargo_contacto_{{ $loop->iteration }}"
                                                        id="cargo_contacto_{{ $loop->iteration }}" class="form-control"
                                                        value="{{ $contacto->cargo }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="#" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-comments"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            @endif
                        </div>
                        {{-- Pedidos del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-pedidos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-pedidos-tab">
                            <div class="card-body">
                                @if ($pedidos->isEmpty())
                                    <p>No hay pedidos registrados</p>
                                @else
                                    <table id="pedidos" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Cliente</th>
                                                {{-- <th>Máquina</th> --}}
                                                <th>Comentarios</th>
                                                <th>Contacto</th>
                                                <th>Creación</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pedidos as $pedido)
                                                @if ($pedido->estado == 'Nuevo')
                                                    <tr>
                                                        <td><a
                                                                href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->id }}</a>
                                                        </td>
                                                        <td><a
                                                                href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->tercero->nombre }}</a>
                                                        </td>
                                                        {{-- <td>
                                                            <ul>
                                                                @foreach ($pedido->maquinas as $maquina)
                                                                    <li><a
                                                                            href="{{ route('pedidos.show', $pedido->id) }}">{{ $maquina->tipo }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </td> --}}
                                                        <td><a
                                                                href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->comentario }}</a>
                                                        </td>
                                                        <td>
                                                            @if ($pedido->contacto && $pedido->contacto->nombre)
                                                                <a
                                                                    href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->contacto->nombre }}</a>
                                                            @endif
                                                        </td>
                                                        <td><a
                                                                href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->created_at }}</a>
                                                        </td>
                                                        <td><a
                                                                href="{{ route('pedidos.show', $pedido->id) }}">{{ $pedido->estado }}</a>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                        {{-- Estadísticas del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-estadisticas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-estadisticas-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Cotizaciones</h4>
                                        <table class="table table-dark table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ÍTEM</th>
                                                    <th>CÓDIGO</th>
                                                    <th>ESTADO</th>
                                                    <th>FECHA CREACIÓN</th>
                                                    <th>FECHA ENVÍO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cotizaciones as $cotizacion)
                                                    <tr>
                                                        {{-- index de tabla --}}
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <a href="{{ route('cotizaciones.show', $cotizacion->id) }}">
                                                                COT000{{ $cotizacion->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $cotizacion->estado }}</td>
                                                        <td>{{ $cotizacion->created_at }}</td>
                                                        <td>{{ $cotizacion->updated_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-6">
                                        <h4>Ventas</h4>
                                        <table class="table table-dark table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ÍTEM</th>
                                                    <th>CÓDIGO</th>
                                                    <th>ESTADO</th>
                                                    <th>FECHA VENTA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pedidos as $pedido)
                                                    <tr>
                                                        {{-- index de tabla --}}
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <a href="{{ route('pedidos.show', $pedido->id) }}">
                                                                {{ $pedido->id }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $pedido->estado }}</td>
                                                        <td>{{ $pedido->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- archivos del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-archivos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-archivos-tab">
                            <div class="row">
                                <div class="form-group col-6 border border-warning">
                                    <h5>Rut</h5>
                                    @if ($tercero->rut)
                                        <div class="form-group">
                                            <embed src="{{ asset('storage/' . $tercero->rut) }}" width="100%"
                                                height="600">
                                            <a href="{{ asset('storage/' . $tercero->rut) }}" target="_blank"
                                                class="btn btn-outline-primary btn-sm">
                                                <ion-icon name="eye-outline"></ion-icon> Ver
                                            </a>
                                            <a href="{{ asset('storage/' . $tercero->rut) }}" download
                                                class="btn btn-outline-success btn-sm">
                                                <ion-icon name="download-outline"></ion-icon> Descargar
                                            </a>
                                        </div>

                                        <div class="form-group">
                                            <label for="rut">Cambiar Rut</label>
                                            <input type="file" class="form-control-file" id="rut"
                                                name="rut" placeholder="Cambiar rut">
                                        </div>
                                    @else
                                        <p>No hay archivo PDF</p>
                                        <input type="file" name="rut" id="rut" class="form-control-file"
                                            placeholder="Agregar Rut">
                                    @endif
                                </div>
                                <div class="form-group col-6 border border-warning">
                                    <h5>Certificación bancaria</h5>
                                    @if ($tercero->certificacion_bancaria)
                                        <div class="form-group">
                                            <embed src="{{ asset('storage/' . $tercero->certificacion_bancaria) }}"
                                                width="100%" height="600">
                                            <a href="{{ asset('storage/' . $tercero->certificacion_bancaria) }}"
                                                target="_blank" class="btn btn-outline-primary btn-sm">
                                                <ion-icon name="eye-outline"></ion-icon> Ver
                                            </a>
                                            <a href="{{ asset('storage/' . $tercero->certificacion_bancaria) }}" download
                                                class="btn btn-outline-success btn-sm">
                                                <ion-icon name="download-outline"></ion-icon> Descargar
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="certificacion_bancaria">Cambiar Certificación bancaria</label>
                                            <input type="file" class="form-control-file" id="certificacion_bancaria"
                                                name="certificacion_bancaria"
                                                placeholder="Cambiar certificación bancaria">
                                        </div>
                                    @else
                                        <p>No hay archivo PDF</p>
                                        <input type="file" name="certificacion_bancaria" id="certificacion_bancaria"
                                            class="form-control-file" placeholder="Agregar certificación bancaria">
                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6 border border-warning">
                                    <h5>Camara de comercio</h5>
                                    @if ($tercero->camara_comercio)
                                        <div class="form-group">
                                            <embed src="{{ asset('storage/' . $tercero->camara_comercio) }}"
                                                width="100%" height="600">
                                            <a href="{{ asset('storage/' . $tercero->camara_comercio) }}" target="_blank"
                                                class="btn btn-outline-primary btn-sm">
                                                <ion-icon name="eye-outline"></ion-icon> Ver
                                            </a>
                                            <a href="{{ asset('storage/' . $tercero->camara_comercio) }}" download
                                                class="btn btn-outline-success btn-sm">
                                                <ion-icon name="download-outline"></ion-icon> Descargar
                                            </a>
                                        </div>
                                    @else
                                        <p>No hay archivo PDF</p>
                                        <input type="file" name="camara_comercio" id="camara_comercio"
                                            class="form-control-file" placeholder="Agregar camara de comercio">
                                    @endif
                                </div>
                                <div class="form-group col-6 border border-warning">
                                    <h5>Cédula representante legal</h5>
                                    @if ($tercero->cedula_representante_legal)
                                        <div class="form-group">
                                            <embed src="{{ asset('storage/' . $tercero->cedula_representante_legal) }}"
                                                width="100%" height="600">
                                            <a href="{{ asset('storage/' . $tercero->cedula_representante_legal) }}"
                                                target="_blank" class="btn btn-outline-primary btn-sm">
                                                <ion-icon name="eye-outline"></ion-icon> Ver
                                            </a>
                                            <a href="{{ asset('storage/' . $tercero->cedula_representante_legal) }}"
                                                download class="btn btn-outline-success btn-sm">
                                                <ion-icon name="download-outline"></ion-icon> Descargar
                                            </a>
                                        </div>
                                    @else
                                        <p>No hay archivo PDF</p>
                                        <input type="file" name="cedula_representante_legal"
                                            id="cedula_representante_legal" class="form-control-file"
                                            placeholder="Agregar cédula representante legal">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            </form>
            {{-- Formulario para eliminar registro --}}
            <form action="{{ route('terceros.destroy', $tercero->id) }}" method="POST" style="display: inline"
                id="deleteForm">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>

    {{-- Modal crear máquina --}}
    <div class="modal fade" id="modalMaquinas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Maquina</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('maquinas.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="tipoMaquina"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="tipo_maquina" name="tipo_maquina">
                                            <option value="">Seleccione un tipo de máquina</option>
                                            @foreach ($tipo_maquina as $t)
                                                <option value="{{ $t->nombre }}">{{ $t->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Marca Fabricante') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control select2" id="marca" name="marca" required>
                                            <option value="">Seleccione una marca fabricante</option>
                                            @foreach ($marca as $m)
                                                <option value="{{ $m->nombre }}">{{ $m->nombre }}
                                                </option>
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
                                                <option value="{{ $mo->nombre }}">{{ $mo->nombre }}
                                                </option>
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

    {{-- Modal agregar sistema --}}
    <div class="modal fade" id="modalAgregarSistema">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Crear sistema para {{ $tercero->nombre }} <span id="tercero-nombre2"></span>
                    </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            {{-- Formulario para crear sistema --}}
                            <form action="{{ route('util.crearSistema') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="Sistema" name="tipo">
                                <input type="hidden" value="{{ $tercero->id }}" name="tercero_id">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="definicion">Definición:</label>
                                    <textarea class="form-control" name="definicion" id="definicion" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fotoLista">Foto:</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input" name="fotoLista" id="fotoLista">
                                        <label class="custom-file-label" for="fotoLista">Seleccionar imágen</label>
                                    </div>
                                    <img id="preview" src="#" alt=""
                                        style="max-width: 200px; max-height: 200px;">
                                    <button id="borrar-foto" type="button" style="display: none;"
                                        class="btn btn-outline-danger btn-sm">x</button>
                                </div>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal para asociar sistema --}}
    <div class="modal fade" id="modalAsociarSistema">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Asociar sistema<span id="tercero-nombre2"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('terceros.asociarSistema') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $tercero->id }}" name="tercero_id">
                                <div class="form-group">
                                    <select name="sistema_id" id="sistema" class="select2" style="width: 100%"
                                        required>
                                        <option value="">Seleccione un sistema</option>
                                        @foreach ($sistemas as $sistema)
                                            <option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Asociar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal crear marca --}}
    <div class="modal fade" id="modalAgregarMarca">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Crear marca para {{ $tercero->nombre }} <span id="tercero-nombre2"></span>
                    </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            {{-- Formulario para crear lista --}}
                            <form action="{{ route('util.crearMarca') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="Marca" name="tipo">
                                <input type="hidden" value="{{ $tercero->id }}" name="tercero_id">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="definicion">Definición:</label>
                                    <textarea class="form-control" name="definicion" id="definicion" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fotoLista">Foto:</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input" name="fotoLista" id="fotoLista">
                                        <label class="custom-file-label" for="fotoLista">Seleccionar imágen</label>
                                    </div>
                                    <img id="preview" src="#" alt=""
                                        style="max-width: 200px; max-height: 200px;">
                                    <button id="borrar-foto" type="button" style="display: none;"
                                        class="btn btn-outline-danger btn-sm">x</button>
                                </div>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Asociar marca --}}
    <div class="modal fade" id="modalAsociarMarca">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Asociar Marca<span id="tercero-nombre2"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('terceros.asociarMarca') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $tercero->id }}" name="tercero_id">
                                <div class="form-group">
                                    <select name="marca_id" id="marca" class="select2" style="width: 100%" required>
                                        <option value="">Seleccione una marca</option>
                                        @foreach ($marca as $marca)
                                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Asociar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script>
        // const paisSelect = document.getElementById('pais_id');
        // paisSelect.addEventListener('change', function() {
        //     const paisCodigo = this.value;
        //     fetch('/ciudades/' + paisCodigo)
        //         .then(response => response.json())
        //         .then(data => {
        //             const ciudadSelect = document.getElementById('ciudad');

        //             ciudadSelect.innerHTML = '';
        //             data.ciudades.forEach(ciudad => {
        //                 const option = document.createElement('option');
        //                 option.value = ciudad.CiudadID;
        //                 option.text = ciudad.CiudadNombre;
        //                 ciudadSelect.appendChild(option);

        //             });
        //         });

        // });

        $(document).ready(function() {
            console.log('hola');
            //ocultar boton agregar
            $('.agregarMaquina').hide();
            //select2
            $('.select2').select2();

            let contadorContactos = 1;
            //agregar contacto
            $('#agregar-contacto').on('click', function() {
                $('#contactos').append(`
                <hr>
                <div class="form-group">
                    <label for="nombre_contacto_${contadorContactos}">Nombre:</label>
                    <input type="text" name="nombre_contacto_${contadorContactos}" id="nombre_contacto_${contadorContactos}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefono_contacto_${contadorContactos}">Teléfono:</label>
                    <input type="text" name="telefono_contacto_${contadorContactos}" id="telefono_contacto_${contadorContactos}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email_contacto_${contadorContactos}">Correo electrónico:</label>
                    <input type="email" name="email_contacto_${contadorContactos}" id="email_contacto_${contadorContactos}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contactos[${contadorContactos}][cargo]">Cargo:</label>
                    <input type="text" name="contactos[${contadorContactos}][cargo]" id="cargo_contacto_${contadorContactos}" class="form-control">
                </div>
                </hr>
            `);
                contadorContactos++;
            });
            //select2
            $('.select2').select2({
                placeholder: "Seleccione...",
                allowClear: true,
                theme: "bootstrap"
            });
        });

        //preview de imagen
        $('#btnAgregar').on('click', function() {
            $('.agregarMaquina').show();
            $('#btnAgregar').hide();
        });

    </script>
@endsection
