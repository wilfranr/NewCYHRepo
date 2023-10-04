@extends('adminlte::page')
@section('title', 'CYH | Marcas')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Marcas</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                            <tr>
                                <td>{{ $marca->id }}</td>
                                <td><a href="{{ route('marcas.edit', $marca->id) }}">{{ $marca->nombre }}</a></td>
                                <td><a href="{{ route('marcas.edit', $marca->id) }}">{{ $marca->descripcion }}</a></td>
                                <td>
                                    <a href="{{ asset('storage/marcas') . '/' . $marca->imagen }}" target="_blank">
                                        <img src="{{ asset('storage/marcas') . '/' . $marca->imagen }}" alt="{{ $marca->nombre }}" width="100">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <form style="display:inline" method="POST" action="{{ route('marcas.destroy', $marca->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>

        </div>
        {{-- Modal crear marca --}}
        <div class="modal fade" id="modal-crear">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Crear Marca</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- card formulario -->
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- Formulario para crear marca --}}
                                <form action="{{ route('marcas.store') }}" method="POST" enctype="multipart/form-data">
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
