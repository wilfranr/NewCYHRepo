@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
        {{-- <button type="button" class="btn btn-primary mb-2 mt-2" data-toggle="modal" data-target="#modal-crear-lista">
            <i class="fas fa-plus"></i>
            Crear lista
        </button> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-fw fa-list"></i> Listas</h3>
                    </div>
                    <div class="card-body">
                        <table id="listas" class="table table-bordered table-striped">
                            <thead>
                                <select class="form-control mb-3" id="filtro-tipo">
                                    <option value="">Filtrar Todos</option>
                                    <option value="Marca">Marca</option>
                                    <option value="Definicion Repuesto">Definicion Repuesto</option>
                                    <option value="Sistema">Sistema</option>
                                    <option value="Medida">Tipo de Medida</option>
                                    <option value="Tipo Maquina">Tipo de máquina</option>
                                    <option value="Modelo Maquina">Modelo de Máquina</option>

                                    
                                </select>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th style="width: 30%">Definicion</th>
                                    <th>Foto</th>
                                    <th>Creación</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listas as $lista)
                                    <tr>
                                        <td><a href="{{ route('listas.edit', $lista->id) }}">{{ $lista->tipo }}</a></td>
                                        <td><a href="{{ route('listas.edit', $lista->id) }}">{{ $lista->nombre }}</a></td>
                                        <td><a href="{{ route('listas.edit', $lista->id) }}">{{ $lista->definicion }}</a></td>
                                        <td>
                                            <a href="{{ asset('storage/listas/' . $lista->foto) }}" target="_blank">
                                                <img src="{{ asset('storage/listas/' . $lista->foto) }}"
                                                    alt="Foto de la lista" width="100px">
                                            </a>
                                        </td>
                                        <td><a href="{{ route('listas.edit', $lista->id) }}">{{ optional($lista->created_at)->format('d/m/Y') }}</a></td>
                                        
                                        </td>
                                        <td>
                                            
                                            <form id="deleteForm" action="{{ route('listas.destroy', $lista->id) }}"
                                            method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm delete"
                                                id="delete-lista">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal crear lista --}}
    <div class="modal fade" id="modal-crear">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Lista</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- card formulario -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- Formulario para crear lista --}}
                            <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <select class="form-control" id="tipo" name="tipo" required>
                                        <option value="">Seleccione un tipo</option>
                                        @foreach ($listasPadre as $listaPadre)
                                            <option value="{{ $listaPadre->nombre }}">{{ $listaPadre->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
@section('js')
    <script>
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
        $(document).ready(function() {
            $('#listas').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "scrollY": "490px",
                "scrollCollapse": true,
                "paging": false,
            });
            // Agregar filtro por tipo
            $('#filtro-tipo').on('change', function() {
                var table = $('#listas').DataTable();
                var tipo = $(this).val();
                table.column(0).search(tipo).draw();
            });
        });
        
    </script>
@endsection
