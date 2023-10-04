@extends('adminlte::page')
@section('title', 'CYH | Marcas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3">
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

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagen">
                                    <label class="custom-file-label" for="inputGroupFile01">Añadir Imágen</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
@endsection
