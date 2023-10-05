@extends('adminlte::page')
@section('content')
    <div class="container">
        <p>Siglas: {{ session('siglas') }}</p>
      <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Advertencia:</h5>
        Los datos que estás a punto de modificar son los datos generales de la empresa y cualquier cambio afectará todos los componentes de la aplicación. Por favor, asegúrate de realizar cambios con precaución y ten en cuenta su impacto en toda la aplicación.

        <h5>Última modificación:</h5>{{$empresa->updated_at}}
        <h5>Usuario que realizó la modificación:</h5>{{Auth::user()->name}}
    </div>
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">Editar Empresa</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-tab" data-toggle="pill"
                            href="#custom-tabs-one-datos" role="tab" aria-controls="custom-tabs-one-datos"
                            aria-selected="true">Datos generales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-contactos-tab" data-toggle="pill"
                            href="#custom-tabs-one-contactos" role="tab" aria-controls="custom-tabs-one-contactos"
                            aria-selected="false">
                            Contactos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-archivos-tab" data-toggle="pill"
                            href="#custom-tabs-one-archivos" role="tab" aria-controls="custom-tabs-one-archivos"
                            aria-selected="false">Archivos</a>
                    </li>
                </ul>
            </div>
            {{-- Contenido de tabs --}}
            <div class="card-body">
                <form method="POST" action="{{ route('empresas.update', $empresa->id) }}" id="form"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- usuario logueado --}}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        {{-- Datos generales de la empresa --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-datos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-tab">
                            <div class="card card-solid">
                                <div class="card-body pb-0">

                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="row">
                                                <div class="col-6">
                                                    {{-- Nombre de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre:</label>
                                                        <input type="text" name="nombre" id="nombre"
                                                            class="form-control"
                                                            value="{{ old('nombre', $empresa->nombre) }}">
                                                    </div>

                                                    {{-- Siglas de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="siglas">Siglas:</label>
                                                        <input type="text" name="siglas" id="siglas"
                                                            class="form-control"
                                                            value="{{ old('siglas', $empresa->siglas) }}">
                                                    </div>

                                                    {{-- Dirección de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="direccion">Dirección:</label>
                                                        <input type="text" name="direccion" id="direccion"
                                                            class="form-control"
                                                            value="{{ old('direccion', $empresa->direccion) }}">
                                                    </div>

                                                    {{-- Teléfono de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="telefono">Teléfono:</label>
                                                        <input type="text" name="telefono" id="telefono"
                                                            class="form-control"
                                                            value="{{ old('telefono', $empresa->telefono) }}">
                                                    </div>

                                                    {{-- Correo de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="correo">Correo:</label>
                                                        <input type="text" name="correo" id="correo"
                                                            class="form-control"
                                                            value="{{ old('correo', $empresa->email) }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    {{-- Nit de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="nit">Nit:</label>
                                                        <input type="text" name="nit" id="nit"
                                                            class="form-control" value="{{ old('nit', $empresa->nit) }}">
                                                    </div>
                                                    {{-- Ciudad de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="ciudad">Ciudad:</label>
                                                        <input type="text" name="ciudad" id="ciudad"
                                                            class="form-control"
                                                            value="{{ old('ciudad', $empresa->ciudad) }}">
                                                    </div>

                                                    {{-- País de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="pais">País:</label>
                                                        <input type="text" name="pais" id="pais"
                                                            class="form-control" value="{{ old('pais', $empresa->pais) }}">
                                                    </div>

                                                    {{-- Logo de la empresa --}}
                                                    <div class="form-group">
                                                        <label for="logo">Logo:</label>
                                                        <img src="{{ asset('storage/'. $empresa->logo) }}" alt="Logo" width="50%">
                                                        <input type="file" name="logo" id="logo"
                                                            class="form-control-file">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        {{-- Contactos de la empresa --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-contactos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-contactos-tab">
                            <p>Acá se mostrarán los contactos importantes de la empresa</p>
                        </div>
                        {{-- Archivos de la empresa --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-archivos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-archivos-tab">
                            <p>Aca se veran los archivos de la empresa</p>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

@endsection
