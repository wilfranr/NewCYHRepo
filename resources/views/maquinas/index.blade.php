@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-fw fa-cogs"></i> Máquinas</h3>
                    </div>
                    <div class="card-body">
                        <table id="maquinas" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serie</th>
                                    <th>Arreglo</th>
                                    <th>Foto</th>
                                    <th>Foto ID</th>
                                    <th>Fecha de creación</th>
                                    {{-- <th>Acciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maquinas as $maquina)
                                    <tr>
                                        <td><a href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->id }}</a>
                                        </td>
                                        <td><a href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->tipo }}</a>
                                        </td>
                                        <td>
                                            @foreach ($maquina->marcas as $marcaMaquina)
                                                <a href="{{ route('maquinas.edit', $maquina->id) }}"> {{ $marcaMaquina->nombre }}
                                                </a>
                                            @endforeach
                                        </td>
                                        <td><a href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->modelo }}</a>
                                        </td>
                                        <td><a href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->serie }}</a>
                                        </td>
                                        <td><a
                                                href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->arreglo }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}" target="_blank">
                                                <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                                    alt="Foto de la máquina" width="200px">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ asset('storage/maquinas/' . $maquina->fotoId) }}" target="_blank">
                                                <img src="{{ asset('storage/maquinas/' . $maquina->fotoId) }}"
                                                    alt="Foto del serial" width="200px">
                                            </a>
                                        </td>

                                        <td><a
                                                href="{{ route('maquinas.edit', $maquina->id) }}">{{ $maquina->created_at }}</a>
                                        </td>
                                        {{-- <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('maquinas.show', $maquina->id) }}"
                                                    class="btn btn-outline-primary btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('maquinas.edit', $maquina->id) }}"
                                                    class="btn btn-outline-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form method="POST" action="{{ route('maquinas.destroy', $maquina->id) }}"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        {{-- Modal crear máquina --}}
        <div class="modal fade" id="modal-crear">
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
                                                @foreach ($marca as $m)
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
                                            <a href="{{ route('maquinas.index') }}" class="btn btn-secondary">Volver</a>
                                        </div>
                                    </div>
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
                $('.select2').select2({});

                $('#maquinas').DataTable({
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                    },
                    "scrollY": true,
                    "scrollY": "550px",
                    "scrollCollapse": true,
                    "paging": false,
                });
                // Eliminar registro
                $('.delete').click(function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, bórralo'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit();
                            //tiempo de espera para que se ejecute el submit
                            setTimeout(function() {
                                Swal.fire(
                                    '¡Eliminado!',
                                    'El registro ha sido eliminado.',
                                    'success'
                                )
                            }, 500);
                        }
                    })
                });
            });
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
        </script>
    @endsection
