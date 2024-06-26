@extends('adminlte::page')
@section('title', 'Crear Artículo')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">Crear Artículo -- <b id="referencia-sm"></b></p>
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
                <form method="POST" action="{{ route('articulos.store') }}" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="tab-content" id="custom-tabs-one-tabContent">

                        {{-- Datos básicos --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-datos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-tab">
                            <div class="card-body pb-0">
                                <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                    <div class="row">
                                        <div class="col-6">

                                            {{-- Referencia --}}
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="referencia">{{ __('Referencia') }}</label>
                                                        <div class="row">
                                                            <div class="col-10">

                                                                <input class="form-control mb-2" type="text"
                                                                    placeholder="Ingrese referencia" name="referencia"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- Definición --}}
                                            <div class="form-group">
                                                <label for="select-definicion">{{ __('Definición Común ') }}</label>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <select class="form-control select2" id="select-definicion"
                                                            name="select-definicion"
                                                            onchange="mostrarFotoMedida(this.value)" required>
                                                            <option value="">Seleccione una definición
                                                            </option>
                                                            @foreach ($definiciones as $id => $nombre)
                                                                <option value="{{ $nombre }}">
                                                                    {{ $nombre }}
                                                                </option>
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
                                            {{-- Peso --}}
                                            <div class="form-group">
                                                <label for="peso">{{ __('Peso (lbs)') }}</label>
                                                <input id="peso" type="number" class="form-control" name="peso"
                                                    value="{{ old('peso') }}">
                                            </div>

                                            {{-- Comentarios --}}
                                            <div class="form-group">
                                                <label for="comentarios">{{ __('Comentarios') }}</label>
                                                <textarea id="comentarios" class="form-control" name="comentarios">{{ old('comentarios') }}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            {{-- Marca fabricante --}}
                                            <div class="form-group">
                                                <!-- Creación de un grupo de formulario en una fila -->
                                                <label for="marca">{{ __('Marca') }}</label>
                                                <select class="form-control select2" id="marca" name="marca">
                                                    <option value="">Seleccione una marca fabricante</option>
                                                    <!-- Opción inicial, sin valor, que indica que ninguna marca ha sido seleccionada -->
                                                    @foreach ($marcas as $marca)
                                                        <!-- Ciclo que recorre la lista de marcas fabricantes -->
                                                        <option value={{$marca->id}}>
                                                            {{ $marca->nombre }}
                                                        </option>
                                                        <!-- Opción que muestra el nombre de la marca fabricante -->
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Descripción específica --}}
                                            <div class="form-group">
                                                <label
                                                    for="descripcion_especifica">{{ __('Descripción específica') }}</label>
                                                <input id="descripcion_especifica" type="text"
                                                    class="form-control @error('descripcion_especifica') is-invalid @enderror"
                                                    name="descripcion_especifica"
                                                    value="{{ old('descripcion_especifica') }}" required>

                                                @error('descripcion_especifica')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            {{-- Foto descriptiva --}}
                                            <div class="form-group">
                                                <label for="foto-descriptiva">{{ __('Foto descriptiva') }}</label>
                                                <div class="col">
                                                    <input type="file" name="foto-descriptiva" id="foto-descriptiva"
                                                        class="custom-file-input">
                                                    <label class="custom-file-label" for="exampleInputFile">Seleccionar
                                                        imágen</label>
                                                    <img id="preview2" src="#" alt="Vista previa de la imagen"
                                                        style="max-width: 200px; max-height: 200px;">
                                                </div>
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
                                <div id="medidas">
                                    <div class="row">
                                        <div class="col">
                                            <input type="hidden" name="contadorMedidas" value="1">
                                            <div class="form-group">
                                                <label for="fotMedida3">Foto de la Medida:</label>
                                                <div>
                                                    <a href="" target="_blank" id="link-foto-medida">
                                                        <img id="fotoMedida3"
                                                            src="{{ asset('storage/listas') }}/no-imagen.jpg"
                                                            alt="Foto de medida" width="200px">
                                                    </a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success" id="agregar-medida">Agregar
                                                medida</button>
                                        </div>
                                        <div class="col">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Id medida</th>
                                                        <th>Tipo de medida</th>
                                                        <th>Valor medida</th>
                                                        <th>Unidad de medida</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="medidas-body">
                                                    <tr>
                                                        <td>
                                                            <input id="idMedida" type="text"
                                                                class="form-control @error('idMedida') is-invalid @enderror"
                                                                name="idMedida[]" value="{{ old('id_medida') }}">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="tipoMedida"
                                                                name="tipoMedida[]">
                                                                <option value="">Seleccione un tipo de medida
                                                                </option>
                                                                @foreach ($medidas as $id => $nombre)
                                                                    <option value="{{ $id }}">
                                                                        {{ $nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="valorMedida" type="text"
                                                                class="form-control @error('valorMedida') is-invalid @enderror"
                                                                name="valorMedida[]" value="{{ old('valorMedida') }}">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="unidadMedida"
                                                                name="unidadMedida[]">
                                                                <option value="">Unidad de medida</option>
                                                                @foreach ($unidadMedidas as $id => $nombre)
                                                                    <option value="{{ $nombre }}">
                                                                        {{ $nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="medidasDatos">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Juegos y Cruces --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-juegos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-juegos-tab">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <label for="cambio">{{ __('Cambios') }}</label>
                                            <div class="row">
                                                <div class="col-10">

                                                    <input class="form-control mb-2" type="text"
                                                        placeholder="Nueva referencia" name="nuevaReferencia">
                                                </div>
                                                <div class="col-2">
                                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                                        id="add_reference">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <select class="select2" name="cambio[]" multiple="multiple"
                                                style="width: 100%">
                                                @foreach ($referencias as $referencia)
                                                    <option value="{{ $referencia['id'] }}">
                                                        {{ $referencia['referencia'] }}
                                                    </option>
                                                @endforeach
                                            </select>


                                            @error('Cambio')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <ul id="new_reference" class="text-primary"></ul>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="juego">{{ __('Componentes:') }}</label><br>
                                            <select class="select2" name="juego[]" multiple="multiple"
                                                style="width: 100%">
                                                @foreach ($articulos as $articulo)
                                                    <option value="{{ $articulo['id'] }}">
                                                        {{ $articulo['referencia'] }} -- {{ $articulo['definicion'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('juego')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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


@endsection
@section('js')
    <script>
        // Función para agregar una referencia al listado de referencias
        // Variable global para el índice
        var indiceReferencia = 1;

        // Evento click del botón
        // $('#add_reference').on('click', function() {
        //     // Obtener la referencia ingresada por el usuario
        //     var referencia = $('input[name="nuevaReferencia"]').val();

        //     // Validar que se haya ingresado una referencia
        //     if (referencia.length > 0) {
        //         // Agregar la referencia al listado de referencias
        //         $('#new_reference').append('<li id="referencia_' + indiceReferencia + '">' + referencia + '</li>');
        //         //almacenar la nueva referencia en un input
        //         $('#form').append('<input type="hidden" name="nuevaReferencia[]" value="' + referencia + '">');

        //         // Agregar la referencia al select de referencias
        //         $('select[name="cambio[]"]').append('<option value="' + indiceReferencia + '">' + referencia +
        //             '</option>');

        //         // Incrementar el índice
        //         indiceReferencia++;

        //         // Limpiar el campo de ingreso de referencia
        //         $('input[name="nuevaReferencia"]').val('');
        //     }
        // });

        function mostrarFotoMedida(definicionId) {
            console.log(definicionId);
            var definicionesFotoMedida = @json($definicionesFotoMedida);
            console.log(definicionesFotoMedida);
            var fotoMedida = "{{ asset('storage/listas') }}/" + (definicionId && definicionId in definicionesFotoMedida ?
                definicionesFotoMedida[definicionId] : 'no-imagen.jpg');
            console.log(fotoMedida);
            $('#fotoMedida3').attr('src', fotoMedida);
            $('#link-foto-medida').attr('href', fotoMedida);
        }
        $(document).ready(function() {
            // select2
            $('.select2').select2({
                placeholder: "Seleccione...",
                allowClear: true,
                theme: "bootstrap"
            });

            // Agregar medidas
            let contadorMedidas = 1;
            $('#agregar-medida').on('click', function() {
                $('#medidas-body').append(`
                <tr>
                                                        <td>
                                                            <input id="idMedida" type="text"
                                                                class="form-control @error('idMedida') is-invalid @enderror"
                                                                name="idMedida[]" value="{{ old('id_medida') }}">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="tipoMedida"
                                                                name="tipoMedida[]">
                                                                <option value="">Seleccione un tipo de medida
                                                                </option>
                                                                @foreach ($medidas as $id => $nombre)
                                                                    <option value="{{ $id }}">{{ $nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="valorMedida" type="text"
                                                                class="form-control @error('valorMedida') is-invalid @enderror"
                                                                name="valorMedida[]" value="{{ old('valorMedida') }}">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="unidadMedida"
                                                                name="unidadMedida[]">
                                                                <option value="">Unidad de medida</option>
                                                                @foreach ($unidadMedidas as $id => $nombre)
                                                                    <option value="{{ $nombre }}">{{ $nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                `);
                contadorMedidas++;
            });
            //Ocultar boton de agregar medida
            $('#medidas').hide();
            // Mostrar boton de agregar medida si se selecciona una definicion
            $('#select-definicion').on('change', function() {
                $('#medidas').show();
                // Obtener referencias a los elementos select e imagen
            });
            //ocultar div crear definición
            $('#divCrearDefinicion').hide();
            // Mostrar div crear definición si se selecciona la opción +
            $('#btn-crear-deficion').on('click', function() {
                $('#divCrearDefinicion').show();
            });
            //ocultar div al seleccionar una definición
            $('#select-definicion').on('change', function() {
                $('#divCrearDefinicion').hide();
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

        // funcion del modal de crear definicion
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
    </script>
@endsection
