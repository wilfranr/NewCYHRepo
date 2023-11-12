@extends('adminlte::page')

@section('content')

    <div class="content-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">{{ $maquina->tipo }}</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    {{-- Tab Datos básicos --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-tab" data-toggle="pill"
                            href="#custom-tabs-one-datos" role="tab" aria-controls="custom-tabs-one-datos"
                            aria-selected="true">Datos básicos</a>
                    </li>

                    {{-- Tab clientes --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-clientes-tab" data-toggle="pill"
                            href="#custom-tabs-one-clientes" role="tab" aria-controls="custom-tabs-one-clientes"
                            aria-selected="false">Clientes Asociados</a>
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
                                        <div class="card bg-light d-flex flex-fill p-3">
                                            <div class="row">
                                                {{-- Columna 1 --}}
                                                <div class="col-6">
                                                    <label for="tipo">Tipo</label>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <select class="form-control select2" id="tipo_maquina"
                                                                name="tipo_maquina">
                                                                <option value="">Seleccione un tipo de máquina
                                                                </option>
                                                                @foreach ($tipo_maquina as $t)
                                                                    @if ($t->nombre == $maquina->tipo)
                                                                        <option value="{{ $t->nombre }}" selected>
                                                                            {{ $t->nombre }}</option>
                                                                    @else
                                                                        <option value="{{ $t->nombre }}">
                                                                            {{ $t->nombre }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-2">
                                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                                data-toggle="modal" data-target="#modalTipoMaquina">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <label for="marca">Marca Fabricante</label>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <select name="marca" id="marca"
                                                                class="form-control select2">
                                                                @foreach ($marca as $m)
                                                                    <option value="{{ $m->id }}"
                                                                        {{ $maquina->marcas->contains($m->id) ? 'selected' : '' }}>
                                                                        {{ $m->nombre }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="col-2">
                                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                                data-toggle="modal" data-target="#modalAgregarMarca">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <label for="modelo">Modelo</label>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <select class="form-control select2" name="modelo"
                                                                id="modelo">
                                                                <option value="">Seleccione un modelo</option>
                                                                @foreach ($modelo as $mo)
                                                                    <option value="{{ $mo->nombre }}"
                                                                        {{ $mo->nombre == $maquina->modelo ? 'selected' : '' }}>
                                                                        {{ $mo->nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-2">
                                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                                data-toggle="modal" data-target="#modalModelo">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="serie">Serie</label>

                                                        <div class="col-md-10">
                                                            <input type="text" name="serie" id="serie"
                                                                class="form-control" value="{{ $maquina->serie }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="arreglo">Arreglo</label>
                                                        <input type="text" name="arreglo" id="arreglo"
                                                            class="form-control" value="{{ $maquina->arreglo }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_creacion">Fecha de Creación</label>
                                                        <input type="text" name="fecha_creacion" id="fecha_creacion"
                                                            class="form-control" value="{{ $maquina->created_at }}"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_actualizacion">Fecha de Actualización</label>
                                                        <input type="text" name="fecha_actualizacion"
                                                            id="fecha_actualizacion" class="form-control"
                                                            value="{{ $maquina->updated_at }}" readonly>
                                                    </div>


                                                </div>


                                            </div>

                                            <div class="form-group row border border-warning p-3">

                                                <div class="col">
                                                    <label for="foto">Foto de referencia</label>
                                                    <div>
                                                        <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                                alt="Foto de la máquina" width="80%">
                                                        </a>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="fotoMaquina" name="fotoMaquina">
                                                            <label class="custom-file-label" for="fotoMaquina">Cambiar
                                                                Foto de la Máquina</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <label for="fotoSerie">Placa</label>
                                                    <div>
                                                        <a href="{{ asset('storage/maquinas/' . $maquina->fotoId) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('storage/maquinas/' . $maquina->fotoId) }}"
                                                                alt="Foto del serial" width="80%">
                                                        </a>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="fotoId" name="fotoId">
                                                            <label class="custom-file-label" for="fotoId">Cambiar Foto
                                                                de la Placa</label>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>

                        {{-- Clientes que manejan esta maquina --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-clientes" role="tabpanel"
                            aria-labelledby="custom-tabs-one-clientes-tab">
                            @if ($terceros->isEmpty())
                                <p>No hay clientes que manejen esta maquina</p>
                            @else
                                <table id="clientes" class="table table-bordered table-striped">
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
                                        @foreach ($terceros as $tercero)
                                            <tr>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->id }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->nombre }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->email }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->telefono }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->created_at }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->estado }}</a>
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
                                Acá van los sistemas asociados a la maquina

                            </div>
                        </div>
                        {{-- Estadísticas del tercero --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-estadisticas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-estadisticas-tab">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        aca van las estadísticas de la maquina
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
        </form>
        {{-- Formulario para eliminar registro --}}
        <form action="{{ route('maquinas.destroy', $maquina->id) }}" method="POST" style="display: inline"
            id="deleteForm">
            @csrf
            @method('DELETE')
        </form>
    </div>



    {{-- <div class="content-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Maquina') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('maquinas.update', $maquina->id) }}"
                            enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="tipoMaquina"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" id="tipo_maquina" name="tipo_maquina">
                                        <option value="">Seleccione un tipo de máquina</option>
                                        @foreach ($tipo_maquina as $t)
                                            @if ($t->nombre == $maquina->tipo)
                                                <option value="{{ $t->nombre }}" selected>{{ $t->nombre }}</option>
                                            @else
                                                <option value="{{ $t->nombre }}">{{ $t->nombre }}</option>
                                            @endif
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
                                            <option value="{{ $m->id }}"
                                                {{ $maquina->marcas->contains($m->id) ? 'selected' : '' }}>
                                                {{ $m->nombre }}
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
                                            <option value="{{ $mo->nombre }}"
                                                {{ $mo->nombre == $maquina->modelo ? 'selected' : '' }}>
                                                {{ $mo->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="serie"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="serie" id="serie"
                                        value="{{ $maquina->serie }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="arreglo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Arreglo') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="arreglo" id="arreglo"
                                        value="{{ $maquina->arreglo }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fotoMaquina"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Foto Máquina') }}</label>
                                <div class="col-md-6">
                                    @if ($maquina->foto_maquina)
                                        <img src="{{ asset('storage/' . $maquina->foto_maquina) }}"
                                            alt="Foto de la máquina" width="200">
                                    @endif
                                    <input type="file" class="form-control" name="fotoMaquina" id="fotoMaquina">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fotoId"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Foto ID') }}</label>
                                <div class="col-md-6">
                                    @if ($maquina->foto_maquina)
                                        <img src="{{ asset('storage/' . $maquina->foto_maquina) }}" alt="Foto ID"
                                            width="200">
                                    @endif
                                    <input type="file" class="form-control" name="fotoId" id="fotoId">
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('maquinas.destroy', $maquina->id) }}"
                            style="display: inline-block;" id="deleteForm">
                            @csrf
                            @method('DELETE')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- Modal Tipo Máquina --}}
    <div class="modal fade" id="modalTipoMaquina">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Tipo de Máquina</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data"
                                id="form-tipo-maquina">
                                @csrf
                                <input type="hidden" id="tipo" name="tipo" value="Tipo Maquina">

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
                                {{-- Boton para enviar formulario --}}
                                <button type="button" class="btn btn-primary btn-md"
                                    onclick="crearTipoMaquina()">Crear</button>
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
                    <h4 class="modal-title">Crear marca<span id="tercero-nombre2"></span>
                    </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            {{-- Formulario para crear lista --}}
                            <form action="{{ route('util.crearMarca') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="Marca" name="tipo">
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

    {{-- Modal Modelo --}}
    <div class="modal fade" id="modalModelo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Modelo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data"
                                id="form-modelo">
                                @csrf
                                <input type="hidden" id="tipo" name="tipo" value="Modelo Maquina">

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
                                {{-- Boton para enviar formulario --}}
                                <button type="button" class="btn btn-primary btn-md"
                                    onclick="crearModelo()">Crear</button>
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
        $(document).ready(function() {
            $('.select2').select2();
        });
        //crear tipo de máquina
        function crearTipoMaquina() {
            // Obtener los datos del formulario
            var form = document.getElementById('form-tipo-maquina');
            var formData = new FormData(form);

            // Enviar los datos del formulario usando AJAX
            axios.post("{{ route('listas.store') }}", formData)
                .then(function(response) {
                    // Mostrar un mensaje de confirmación durante 1 segundo
                    Swal.fire({
                        icon: 'success',
                        title: 'Tipo de Máquina creada exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Recargar página
                        window.location.reload();
                    });

                })
                .catch(function(error) {
                    // Obtener los errores de la respuesta
                    var errors = error.response.data.errors;

                    // Construir una lista HTML con los errores
                    var listaErrores = '<ul>';
                    $.each(errors, function(key, error) {
                        listaErrores += '<li>' + error + '</li>';
                    });
                    listaErrores += '</ul>';

                    // Mostrar los errores en un cuadro de diálogo
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: listaErrores
                    });
                });
        }

        //crear Marca
        function crearMarca() {
            // Obtener los datos del formulario
            var form = document.getElementById('form-marca');
            var formData = new FormData(form);

            // Enviar los datos del formulario usando AJAX
            axios.post("{{ route('marcas.store') }}", formData)
                .then(function(response) {
                    // Mostrar un mensaje de confirmación durante 1 segundo
                    Swal.fire({
                        icon: 'success',
                        title: 'Marca creada exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Recargar página
                        window.location.reload();
                    });

                })
                .catch(function(error) {
                    // Obtener los errores de la respuesta
                    var errors = error.response.data.errors;

                    // Construir una lista HTML con los errores
                    var listaErrores = '<ul>';
                    $.each(errors, function(key, error) {
                        listaErrores += '<li>' + error + '</li>';
                    });
                    listaErrores += '</ul>';

                    // Mostrar los errores en un cuadro de diálogo
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: listaErrores
                    });
                });
        }

        //crear Modelo
        function crearModelo() {
            // Obtener los datos del formulario
            var form = document.getElementById('form-modelo');
            var formData = new FormData(form);

            // Enviar los datos del formulario usando AJAX
            axios.post("{{ route('listas.store') }}", formData)
                .then(function(response) {
                    // Mostrar un mensaje de confirmación durante 1 segundo
                    Swal.fire({
                        icon: 'success',
                        title: 'Modelo creado exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Recargar página
                        window.location.reload();
                    });

                })
                .catch(function(error) {
                    // Obtener los errores de la respuesta
                    var errors = error.response.data.errors;

                    // Construir una lista HTML con los errores
                    var listaErrores = '<ul>';
                    $.each(errors, function(key, error) {
                        listaErrores += '<li>' + error + '</li>';
                    });
                    listaErrores += '</ul>';

                    // Mostrar los errores en un cuadro de diálogo
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: listaErrores
                    });
                });
        }
    </script>
@endsection
