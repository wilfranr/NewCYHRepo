@extends('adminlte::page')

@section('content')
    <div class="content-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">{{ $sistema->nombre }}</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    {{-- Tab Datos básicos --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-tab" data-toggle="pill"
                            href="#custom-tabs-one-datos" role="tab" aria-controls="custom-tabs-one-datos"
                            aria-selected="true">Datos básicos</a>
                    </li>
                    {{-- Tab Maquinas --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-maquinas-tab" data-toggle="pill"
                            href="#custom-tabs-one-maquinas" role="tab" aria-controls="custom-tabs-one-maquinas"
                            aria-selected="false">
                            Máquinas Asociadas
                        </a>
                    </li>
                    {{-- Tab proveedores --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-proveedores-tab" data-toggle="pill"
                            href="#custom-tabs-one-proveedores" role="tab" aria-controls="custom-tabs-one-proveedores"
                            aria-selected="false">Proveedores Asociados</a>
                    </li>
                    {{-- Tab Marcas Asociados --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-sistemas-tab" data-toggle="pill"
                            href="#custom-tabs-one-sistemas" role="tab" aria-controls="custom-tabs-one-sistemas"
                            aria-selected="false">Marcas Asociadas</a>
                    </li>
                    {{-- Tab Estadísticas --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-estadisticas-tab" data-toggle="pill"
                            href="#custom-tabs-one-estadisticas" role="tab" aria-controls="custom-tabs-one-estadisticas"
                            aria-selected="false">Estadísticas</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('sistemas.update', ['id' => $sistema->id]) }}" id="form"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        {{-- Datos básicos --}}
                        <div class="tab-pane fade show active flex" id="custom-tabs-one-datos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-tab">
                            <div class="card mb-3 mx-auto" style="max-width: 80%;">
                                <div class="row g-0">
                                    {{-- Columna 1 --}}
                                    <div class="col-md-8 p-3">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nombre">Nombre</label>
                                                <input class="form-control" name="nombre" id="nombre"
                                                    value="{{ $sistema->nombre }}">
                                            </div><br>
                                            <div class="form-floating">
                                                <label for="floatingTextarea2">Descripción</label>
                                                <textarea class="form-control" placeholder="Ingrese una descripción" id="floatingTextarea2" style="height: 100px"
                                                    name="descripcion">{{ $sistema->descripcion }}</textarea>
                                            </div>
                                            <p class="card-text"><small class="text-muted">Fecha de Creación:
                                                    {{ $sistema->created_at }}</small></p>
                                            <p class="card-text"><small class="text-muted">Fecha de Actualización:
                                                    {{ $sistema->updated_at }}</small></p>
                                        </div>
                                    </div>

                                    {{-- Columna 2 --}}
                                    <div class="col-md-4 p-3">
                                        {{-- input para cambiar la foto --}}
                                        <img src="{{ asset('storage/sistemas') . '/' . $sistema->imagen }}"
                                            alt="{{ $sistema->nombre }}" class="img-fluid rounded-start mb-3">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    name="imagen">
                                                <label class="custom-file-label" for="inputGroupFile01">Cambiar
                                                    Imágen</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <ion-icon name="link-outline"></ion-icon>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- Maquinas asociadas al sistema --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-maquinas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-admin-tab">
                            <div class="form-group border border-warning mt-4 p-3">
                                {{-- Si no hay maquinas asociadas al sistema --}}
                                {{-- @if ($maquinas->isEmpty())
                                    <p>No hay máquinas asociadas a este sistema</p>
                                @else
                                    <table id="maquinas" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nombre</th>
                                                <th>Módelo</th>
                                                <th>Serie</th>
                                                <th>Arreglo</th>
                                                <th>Foto</th>
                                                <th>Serial</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($maquinas as $maquina)
                                                <tr>
                                                    <td><a
                                                            href="{{ route('maquinas.show', $maquina->id) }}">{{ $maquina->id }}</a>
                                                    </td>
                                                    <td><a
                                                            href="{{ route('maquinas.show', $maquina->id) }}">{{ $maquina->tipo }}</a>
                                                    </td>
                                                    <td><a
                                                            href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->modelo }}</a>
                                                    </td>
                                                    <td><a
                                                            href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->serie }}</a>
                                                    </td>
                                                    <td><a
                                                            href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->arreglo }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                                alt="Foto de la máquina" width="200px">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ asset('storage/maquinas/' . $maquina->fotoId) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/maquinas/' . $maquina->fotoId) }}"
                                                                alt="Foto del serial" width="200px">
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif --}}
                            </div>
                        </div>

                        {{-- Proveedores que manejan este sistema --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-proveedores" role="tabpanel"
                            aria-labelledby="custom-tabs-one-proveedores-tab">
                            @if ($proveedores->isEmpty())
                                <p>No hay proveedores que manejen este sistema</p>
                            @else
                            <p>Proveedores que manejan este sistema</p>
                                <table id="proveedores" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Teléfono</th>
                                            <th>Creación</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proveedores as $proveedor)
                                            <tr>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->id }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->nombre }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->email }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->telefono }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->created_at }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $proveedor->id) }}">{{ $proveedor->estado }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>

                        {{-- Marcas asociadas --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-sistemas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-sistemas-tab">
                            <div class="card-body">
                                Acá van las marcas asociadas al sistema

                            </div>
                        </div>

                        {{-- Estadísticas del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-estadisticas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-estadisticas-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        aca van las estadísticas del sistema
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    {{-- Formulario para eliminar registro --}}
    <form action="{{ route('sistemas.destroy', $sistema->id) }}" method="POST" style="display: inline" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection
