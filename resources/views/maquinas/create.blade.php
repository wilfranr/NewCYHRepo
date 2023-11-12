@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ __('Crear Máquina') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('maquinas.store') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- Tipo de máquina --}}
                            <div class="form-group row">
                                <label for="tipo_maquina"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" id="tipo_maquina" name="tipo_maquina">
                                        <option value="">Seleccione un tipo de máquina</option>
                                        @foreach ($tipo_maquina as $t)
                                            <option value="{{ $t->nombre }}">{{ $t->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#modalTipoMaquina">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- Marca --}}
                            <div class="form-group row">
                                <label for="marca"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Marca Fabricante') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" id="marca" name="marca" required>
                                        <option value="">Seleccione una marca fabricante</option>
                                        @foreach ($marca as $m)
                                            <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#modalAgregarMarca">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- Modelo --}}
                            <div class="form-group row">
                                <label for="modelo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" name="modelo" id="modelo">
                                        <option value="">Seleccione un modelo</option>
                                        @foreach ($modelo as $mo)
                                            <option value="{{ $mo->nombre }}">{{ $mo->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#modalModelo">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
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
                                    <a href="{{ route('maquinas.index') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="definicion">Definición:</label>
                                        <textarea class="form-control" name="definicion" id="definicion" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fotoLista">Foto:</label>
                                        <div class="input-group">
                                            <input type="file" class="custom-file-input" name="fotoLista"
                                                id="fotoLista">
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
                                <form action="{{ route('util.crearMarca') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="Marca" name="tipo">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="definicion">Definición:</label>
                                        <textarea class="form-control" name="definicion" id="definicion" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fotoLista">Foto:</label>
                                        <div class="input-group">
                                            <input type="file" class="custom-file-input" name="fotoLista"
                                                id="fotoLista">
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
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="definicion">Definición:</label>
                                        <textarea class="form-control" name="definicion" id="definicion" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fotoLista">Foto:</label>
                                        <div class="input-group">
                                            <input type="file" class="custom-file-input" name="fotoLista"
                                                id="fotoLista">
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

    </div>
@endsection
@section('js') 
    <script>
        // Vista previa de la imagen
        document.getElementById("fotoId").addEventListener("change", function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("preview2").src = e.target.result;
                // Mostrar el botón para borrar la foto
                var borrarFotoButton = document.getElementById('borrar-foto');
                borrarFotoButton.style.display = 'block';
            };
            reader.readAsDataURL(e.target.files[0]);
        });
        // Capturar el evento de clic del botón para borrar la foto
        document.getElementById('borrar-foto').addEventListener('click', function() {
            // Limpiar el campo de entrada de archivo y la imagen previsualizada
            var fileInput = document.getElementById('fotoId');
            fileInput.value = '';
            var previewImage = document.getElementById('preview2');
            previewImage.src = '';
            previewImage.style.display = 'none';

            // Ocultar el botón para borrar la foto
            var borrarFotoButton = document.getElementById('borrar-foto');
            borrarFotoButton.style.display = 'none';
        });

        // Vista previa de la imagen
        document.getElementById("fotoMaquina").addEventListener("change", function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("preview").src = e.target.result;
                // Mostrar el botón para borrar la foto
                var borrarFotoButton = document.getElementById('borrar-foto2');
                borrarFotoButton.style.display = 'block';
            };
            reader.readAsDataURL(e.target.files[0]);
        });
        // Capturar el evento de clic del botón para borrar la foto
        document.getElementById('borrar-foto2').addEventListener('click', function() {
            // Limpiar el campo de entrada de archivo y la imagen previsualizada
            var fileInput = document.getElementById('fotoMaquina');
            fileInput.value = '';
            var previewImage = document.getElementById('preview');
            previewImage.src = '';
            previewImage.style.display = 'none';

            // Ocultar el botón para borrar la foto
            var borrarFotoButton = document.getElementById('borrar-foto2');
            borrarFotoButton.style.display = 'none';
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
        //select2
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Seleccione una opción'
            });
        });
    </script>
@endsection
