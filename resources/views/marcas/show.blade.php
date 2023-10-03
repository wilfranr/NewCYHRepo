@extends('adminlte::page')
@section('title', 'CYH | Marcas')
@section('content')
    <div class="content-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">{{ $marca->nombre }}</p>
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
                    {{-- Tab Sistemas Asociados --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-sistemas-tab" data-toggle="pill"
                            href="#custom-tabs-one-sistemas" role="tab" aria-controls="custom-tabs-one-sistemas"
                            aria-selected="false">Sistemas Asociados</a>
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
                <form method="POST" action="" id="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        {{-- Datos básicos --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-datos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-tab">
                            <div class="card card-solid">
                                <div class="card-body pb-0">
                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="row">
                                                {{-- Columna 1 --}}
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" name="nombre" id="nombre"
                                                            class="form-control" value="{{ $marca->nombre }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripción</label>
                                                        <input type="text" name="descripcion" id="descripcion"
                                                            class="form-control" value="{{ $marca->descripcion }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_creacion">Fecha de Creación</label>
                                                        <input type="text" name="fecha_creacion" id="fecha_creacion"
                                                            class="form-control" value="{{ $marca->created_at }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_actualizacion">Fecha de Actualización</label>
                                                        <input type="text" name="fecha_actualizacion"
                                                            id="fecha_actualizacion" class="form-control"
                                                            value="{{ $marca->updated_at }}">
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
                        {{-- Maquinas asociadas a la marca --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-maquinas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-admin-tab">
                            <div class="form-group border border-warning mt-4 p-3">
                                {{-- Si no hay maquinas asociadas a la marca --}}
                                @if ($maquinas->isEmpty())
                                    <p>No hay máquinas asociadas a esta marca</p>
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
                                @endif
                            </div>
                        </div>

                        {{-- Proveedores que manejan esta marca --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-proveedores" role="tabpanel"
                            aria-labelledby="custom-tabs-one-proveedores-tab">
                            @if ($proveedores->isEmpty())
                                <p>No hay proveedores que manejen esta marca</p>
                            @else
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
                        {{-- Sistemas asociados --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-sistemas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-sistemas-tab">
                            <div class="card-body">
                                Acá van los sistemas asociados a la marca

                            </div>
                        </div>
                        {{-- Estadísticas del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-estadisticas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-estadisticas-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        aca van las estadísticas de la marca
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
        </form>
        {{-- Formulario para eliminar registro --}}
        <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display: inline"
            id="deleteForm">
            @csrf
            @method('DELETE')
        </form>
    </div>
    </div>
@endsection
