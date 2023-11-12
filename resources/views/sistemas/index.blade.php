@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h1>Sistemas</h1>
                </div>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Fecha de modificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sistemas as $sistema)
                            <tr>

                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->id }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->nombre }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->descripcion }}</a>
                                </td>
                                <td>
                                    <a href="{{ asset('storage/sistemas') . '/' . $sistema->imagen }}" target="_blank"><img src="{{ asset('storage/sistemas') . '/' . $sistema->imagen }}" alt="" width="100px"></a>
                                </td>
                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->created_at }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}">{{ $sistema->updated_at }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Modal crear sistema --}}
    <div class="modal fade" id="modal-crear">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Sistema</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- card formulario -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- Formulario para crear sistema --}}
                            <form action="{{ route('sistemas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese el nombre de la marca">
                                </div>

                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese una descripción"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="imagen">Imagen</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen">
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
