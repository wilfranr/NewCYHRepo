@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">{{ $articulo->referencia }} :: {{ $articulo->definicion }}</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-tab" data-toggle="pill"
                            href="#custom-tabs-one-datos" role="tab" aria-controls="custom-tabs-one-datos"
                            aria-selected="true">Datos básicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-medidas-tab" data-toggle="pill"
                            href="#custom-tabs-one-medidas" role="tab" aria-controls="custom-tabs-one-medidas"
                            aria-selected="false"><span id="tab-medidas">Medidas</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-juegos-tab" data-toggle="pill"
                            href="#custom-tabs-one-juegos" role="tab" aria-controls="custom-tabs-one-juegos"
                            aria-selected="false">Juegos y Cruces</a>
                    </li>
                </ul>
            </div>
            {{-- /Tabs --}}
            {{-- Tab content --}}
            <div class="card-body">
                {{-- Formulario --}}
                <form method="POST" action="{{ route('articulos.update', $articulo->id) }}" enctype="multipart/form-data"
                    id="form">
                    @csrf
                    @method('PUT')
                    <div class="tab-content" id="custom-tabs-one-tabContent">

                        {{-- Datos básicos --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-datos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-tab">
                            <div class="card-body pb-0">
                                <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                    <div class="row">
                                        {{-- Columna 1 --}}
                                        <div class="col-6">
                                            {{-- Definición --}}
                                            <div class="form-group">
                                                <label for="select-definicion">{{ __('Definición  ') }}</label>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <select class="select2" id="definicion" name="definicion" required
                                                            style="width: 100%" onchange="mostrarFotoMedida(this.value)"
                                                            required>
                                                            <option value="">Seleccione una definición</option>
                                                            @foreach ($definiciones as $d)
                                                                <option value="{{ $d->nombre }}"
                                                                    {{ $d->nombre == $articulo->definicion ? 'selected' : '' }}>
                                                                    {{ $d->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            data-toggle="modal" data-target="#modalDefinicion">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Referencia --}}
                                            <div class="form-group">
                                                <!-- Creación de un grupo de formulario en una fila -->
                                                <label for="referencia">{{ __('Referencia') }}</label>
                                                {{-- input de referencia --}}
                                                <input id="referencia" type="text"
                                                    class="form-control @error('referencia') is-invalid @enderror"
                                                    name="referencia" value="{{ $articulo->referencia }}" required>

                                                {{-- validacion de referencia --}}
                                                @error('referencia')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>

                                            {{-- Peso --}}
                                            <div class="form-group">
                                                <label for="peso">{{ __('Peso (lbs)') }}</label>
                                                <input type="number" id="peso" class="form-control" name="peso"
                                                    step="any" value="{{ $articulo->peso }}">
                                            </div>

                                            {{-- Comentarios --}}
                                            <div class="form-group">
                                                <label for="comentarios">{{ __('Comentarios') }}</label>
                                                <textarea id="comentarios" class="form-control" name="comentarios">{{ $articulo->comentarios }}</textarea>
                                            </div>

                                        </div>
                                        {{-- Columna 2 --}}
                                        <div class="col-6">
                                            {{-- Marca fabricante --}}
                                            <div class="form-group">
                                                <!-- Creación de un grupo de formulario en una fila -->
                                                <label for="marca">{{ __('Marca') }}</label>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <select class="form-control select2" id="marca" name="marca"
                                                            required>
                                                            <option value="">Seleccione una marca fabricante</option>
                                                            @foreach ($marca as $m)
                                                                <option value="{{ $m->nombre }}"
                                                                    {{ $m->nombre == $articulo->marca ? 'selected' : '' }}>
                                                                    {{ $m->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            data-toggle="modal" data-target="#modalMarca">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Descripción específica --}}
                                            <div class="form-group">
                                                <label
                                                    for="descripcion_especifica">{{ __('Descripción específica') }}</label>
                                                <input id="descripcion_especifica" type="text"
                                                    class="form-control @error('descripcion_especifica') is-invalid @enderror"
                                                    name="descripcion_especifica"
                                                    value="{{ $articulo->descripcionEspecifica }}" required>

                                                @error('descripcion_especifica')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            {{-- Foto descriptiva --}}
                                            <div class="form-group border border-warning p-3 mb-3">
                                                <label for="foto-descriptiva">Foto Descriptiva</label>
                                                <input type="hidden" name="foto_descriptiva_actual"
                                                    value="{{ $articulo->fotoDescriptiva }}">
                                                <input type="file" class="form-control-file" name="foto-descriptiva"
                                                    id="foto-descriptiva">
                                                <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                    target="_blank">
                                                    <img id="preview2"
                                                        src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                        alt="Foto Descriptiva" width="300px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Medidas --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-medidas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-medidas-tab">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" name="contadorMedidas" value="1">
                                        <div class="form-group">
                                            @foreach ($definiciones as $definicion)
                                                @if ($definicion->nombre == $articulo->definicion)
                                                    <a href="{{ asset('storage/listas/' . $definicion->foto) }}"
                                                        target="_blank">
                                                        <img src="{{ asset('storage/listas/' . $definicion->foto) }}"
                                                            alt="Foto Medida" width="300px" id="fotoMedida3">
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-success" id="agregar-medida">Agregar
                                            medida</button>
                                    </div>
                                    <div class="col">
                                        <div id="medidasDatos">
                                            <div class="form-group">
                                                <ul class="list-group">
                                                    @foreach ($medidas as $medida)
                                                        <li class="list-group-item">
                                                            {{ $medida->nombre }}: {{ $medida->valor }}
                                                            {{ $medida->unidad }}
                                                            --
                                                            {{ $medida->idMedida }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Juegos y Cruces --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-juegos" role="tabpanel"
                            aria-labelledby="custom-tabs-three-one-tab">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="cambio">{{ __('Cambio') }}</label>
                                            <select class="select2" name="cambio[]" multiple="multiple"
                                                style="width: 100%">
                                                {{-- Mostrar los nuevos artículos --}}
                                                @foreach ($articulos as $articuloOption)
                                                    <option value="{{ $articuloOption->id }}">
                                                        {{ $articuloOption->referencia }}
                                                    </option>
                                                @endforeach

                                                {{-- Mostrar los artículos existentes en la relación de suplencia y seleccionarlos por defecto --}}
                                                @foreach ($articulosEnSuplencia as $articuloId)
                                                    @php
                                                        $articuloExistente = $articulos->find($articuloId);
                                                    @endphp
                                                    <option value="{{ $articuloExistente->id }}" selected>
                                                        {{ $articuloExistente->referencia }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <ul class="list-group"><b>Cambios actuales</b>
                                                @foreach ($articulosEnSuplencia as $articuloId)
                                                    @php
                                                        $articuloExistente = $articulos->find($articuloId);
                                                    @endphp
                                                    <li class="list-group-item">
                                                        <a href="{{ route('articulos.edit', $articuloExistente->id) }}"
                                                            target="_blank">{{ $articuloExistente->referencia }} --
                                                            {{ $articuloExistente->definicion }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="juego">{{ __('Componentes:') }}</label><br>
                                            <select class="select2" name="juego[]" multiple="multiple"
                                                style="width: 100%">
                                                {{-- Mostrar los nuevos artículos --}}
                                                @foreach ($articulos as $articuloOption)
                                                    <option value="{{ $articuloOption->id }}">
                                                        {{ $articuloOption->referencia }}
                                                    </option>
                                                @endforeach

                                                {{-- Mostrar los artículos existentes en la relación de suplencia y seleccionarlos por defecto --}}
                                                @foreach ($articulosEnJuego as $articuloId)
                                                    @php
                                                        $articuloExistente = $articulos->find($articuloId);
                                                    @endphp
                                                    <option value="{{ $articuloExistente->id }}" selected>
                                                        {{ $articuloExistente->referencia }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('juego')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <ul class="list-group"><b>Componentes que hacen parte de este juego</b>
                                                @foreach ($articulosEnJuego as $articuloId)
                                                    @php
                                                        $articuloExistente = $articulos->find($articuloId);
                                                    @endphp
                                                    <li class="list-group-item">
                                                        <a href="{{ route('articulos.edit', $articuloExistente->id) }}"
                                                            target="_blank">{{ $articuloExistente->referencia }} --
                                                            {{ $articuloExistente->definicion }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- /Formulario --}}
            </div>
        </div>


    </div>
    {{-- Modal Definicion --}}
    <div class="modal fade" id="modalDefinicion">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Definicion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data"
                                id="form-definicion">
                                @csrf
                                <input type="hidden" id="tipo" name="tipo" value="Definición">

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
                                    onclick="crearDefinicion()">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Crear Marca --}}
    <div class="modal fade" id="modalMarca">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Marca</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data"
                                id="form-marca">
                                @csrf
                                <input type="hidden" id="tipo" name="tipo" value="Marca">

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
                                    onclick="crearMarca()">Crear</button>
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
        //funcion para mostrar foto medida
        function mostrarFotoMedida(definicionId) {
            console.log(definicionId);
            var definicionesFotoMedida = @json($definicionesFotoMedida);
            console.log('Foto Medida', definicionesFotoMedida);
            var fotoMedida = "{{ asset('storage/listas') }}/" + (definicionId && definicionId in definicionesFotoMedida ?
                definicionesFotoMedida[definicionId] : 'no-imagen.jpg');
            console.log('Var fotoMedida', fotoMedida);
            $('#fotoMedida3').attr('src', fotoMedida);
            $('#link-foto-medida').attr('href', fotoMedida);
        }
        $(document).ready(function() {
            let contadorMedidas = 1;
            $('#agregar-medida').on('click', function() {
                $('#medidasDatos').append(`
                    <div class="form-group">
                        <label for="tipoMedida">{{ __('Tipo de medida') }}</label>
                        <div class="col-md-8">
                            <select class="form-control" id="tipoMedida${contadorMedidas}" name="tipoMedida[]">
                                <option value="">Seleccione un tipo de medida</option>
                                @foreach ($tipoMedida as $id => $nombre)
                                    <option value="{{ $id }}">{{ $nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="valorMedida" >{{ __('Valor medida') }}</label>
                        <div class="col-md-8">
                            <input id="valorMedida" type="text" class="form-control @error('valorMedida') is-invalid @enderror"
                            name="valorMedida[]" value="{{ old('valorMedida') }}">
                            @error('valorMedida')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        </div>
                        
                    <div class="form-group">
                        <div class="col-md-8">
                            <label for="unidadMedida" >{{ __('Unidad de medida') }}</label>
                            <select class="form-control" id="unidadMedida" name="unidadMedida[]">
                                <option value="">Unidad de medida</option>
                                @foreach ($unidadMedidas as $id => $nombre)
                                    <option value="{{ $nombre }}">{{ $nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="idMedida">{{ __('Id Medida') }}</label>
                        <div class="col-md-6">
                            <input id="idMedida" type="text" class="form-control @error('idMedida') is-invalid @enderror"
                                name="idMedida[]" value="{{ old('id_medida') }}">
                            @error('idMedida')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                `);
                contadorMedidas++;
            });

            // Vista previa de la imagen
            document.getElementById("foto-descriptiva").addEventListener("change", function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("preview2").src = e.target.result;
                };
                reader.readAsDataURL(e.target.files[0]);
            });

            //Tomar datos del input de referencia y ponerlos en el input de referencia-sm
            $('#referencia').on('keyup', function() {
                $('#referencia-sm').text($(this).val());
            });

        });

        // select2
        $('.select2').select2({
            placeholder: "Seleccione...",
            allowClear: true,
            theme: "bootstrap"
        });

        // Obtener los elementos del input de carga de archivo y los elementos de la vista previa
        var inputImagen = document.getElementById('fotoLista');
        var imagenPreview = document.getElementById('preview');

        // Agregar un evento change al input de carga de archivo
        inputImagen.addEventListener('change', function(event) {
            // Obtener el archivo seleccionado
            var archivo = event.target.files[0];

            // Crear un objeto URL para la imagen seleccionada
            var urlImagen = URL.createObjectURL(archivo);

            // Mostrar la imagen en la vista previa
            imagenPreview.src = urlImagen;

            // Mostrar el botón para borrar la foto
            var borrarFotoButton = document.getElementById('borrar-foto');
            borrarFotoButton.style.display = 'block';

        });
        // Capturar el evento de clic del botón para borrar la foto
        document.getElementById('borrar-foto').addEventListener('click', function() {
            // Limpiar el campo de entrada de archivo y la imagen previsualizada
            var fileInput = document.getElementById('fotoLista');
            fileInput.value = '';
            var previewImage = document.getElementById('preview');
            previewImage.src = '';
            previewImage.style.display = 'none';

            // Ocultar el botón para borrar la foto
            var borrarFotoButton = document.getElementById('borrar-foto');
            borrarFotoButton.style.display = 'none';
        });
        //crear definicion
        function crearDefinicion() {
            // Obtener los datos del formulario
            var form = document.getElementById('form-definicion');
            var formData = new FormData(form);

            // Enviar los datos del formulario usando AJAX
            axios.post("{{ route('listas.store') }}", formData)
                .then(function(response) {
                    // Mostrar un mensaje de confirmación durante 1 segundo
                    Swal.fire({
                        icon: 'success',
                        title: 'Definición creada exitosamente',
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
        // crear marca
        function crearMarca() {
            // Obtener los datos del formulario
            var form = document.getElementById('form-marca');
            var formData = new FormData(form);

            // Enviar los datos del formulario usando AJAX
            axios.post("{{ route('listas.store') }}", formData)
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
    </script>
@endsection
