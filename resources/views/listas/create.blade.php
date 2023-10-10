@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <!-- card formulario -->
        <div class="card mt-3">
            <!-- /.card-header -->
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-fw fa-tasks"></i> Crear Lista</h3>
            </div>
            <div class="card-body">
                {{-- Formulario para crear lista --}}
                <form action="{{ route('listas.store') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="0">Seleccione un tipo</option>
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
                        <button id="borrar-foto" type="button" style="display: none;" class="btn btn-outline-danger btn-sm">x</button>
                    </div>
                </form>    
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
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
        
    </script>
@endsection
