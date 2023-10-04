@extends('adminlte::page')
@section('title', 'CYH | Sistemas')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 mt-3">
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
        </div>
    </div>
    <!-- /.card -->
@endsection
