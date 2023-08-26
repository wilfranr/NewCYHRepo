@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Artículo') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articulos.update', $articulo->id) }}"
                            enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="marca"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Marca fabricante') }}</label>

                                <div class="form-group">
                                    <select class="form-control select2" id="marca" name="marca" required>
                                        <option value="">Seleccione una marca fabricante</option>
                                        @foreach ($marca as $m)
                                            <option value="{{ $m->nombre }}"
                                                {{ $m->nombre == $articulo->marca ? 'selected' : '' }}>
                                                {{ $m->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="definicion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Definición') }}</label>
                                <div class="col-md-6">
                                    {{-- input con definicion --}}
                                    <select class="form-control select2" id="definicion" name="definicion" required>
                                        <option value="">Seleccione una definición</option>
                                        @foreach ($definiciones as $d)
                                            <option value="{{ $d->nombre }}"
                                                {{ $d->nombre == $articulo->definicion ? 'selected' : '' }}>
                                                {{ $d->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Referencia --}}
                            <div class="form-group row">
                                <label for="referencia"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Referencia') }}</label>

                                <div class="col-md-6">
                                    {{-- input de referencia --}}
                                    <input id="referencia" type="text"
                                        class="form-control @error('referencia') is-invalid @enderror" name="referencia"
                                        value="{{ $articulo->referencia }}" required>

                                    {{-- validacion de referencia --}}
                                    @error('referencia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Peso --}}

                            <div class="form-group row">
                                <label for="peso"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                                <div class="col-md-6">
                                    <input type="number" id="peso" class="form-control" name="peso" step="any"
                                        value="{{ $articulo->peso }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="comentarios"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Comentarios') }}</label>

                                <div class="col-md-6">
                                    <textarea id="comentarios" class="form-control" name="comentarios">{{ $articulo->comentarios }}</textarea>
                                </div>
                            </div>
                            {{-- Foto descriptiva --}}
                            <div class="form-group border border-warning p-3 mb-3">
                                <label for="foto-descriptiva">Foto Descriptiva</label>
                                <input type="hidden" name="foto_descriptiva_actual"
                                    value="{{ $articulo->fotoDescriptiva }}">
                                <input type="file" class="form-control-file" name="foto-descriptiva">
                                <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}" target="_blank">
                                    <img src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                        alt="Foto Descriptiva" width="300px">
                                </a>
                            </div>

                            {{-- Foto Medida --}}
                            <div class="form-group border border-warning p-3 mb-3">
                                <label for="fotoMedida">Foto Medida</label>
                                @foreach ($definiciones as $definicion)
                                    @if ($definicion->nombre == $articulo->definicion)
                                        <a href="{{ asset('storage/listas/' . $definicion->fotoMedida) }}" target="_blank">
                                            <img src="{{ asset('storage/listas/' . $definicion->fotoMedida) }}"
                                                alt="Foto Medida" width="300px">
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Campos de las medidas -->
                            <h2>Medidas</h2>

                            @foreach ($articulo->medidas as $index => $medida)
                                <div class="form-group">
                                    <label for="tipoMedida{{ $index }}">Tipo de medida {{ $index }}</label>
                                    <select name="tipoMedida" id="tipoMedida" class="form-select">
                                        <option value="">Seleccione un tipo de medida</option>
                                        @foreach ($medidas as $medida)
                                        @endforeach
                                        <option value="{{ $medida->id }}"
                                            {{ $medida->id == $medida->id ? 'selected' : '' }}>
                                            {{ $medida->nombre }}</option>
                                        @foreach ($tipoMedida as $tipo)
                                            <option value="{{ $tipo }}">{{ $tipo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="valor{{ $index }}">Valor {{ $index }}</label>
                                    <input type="text" name="valor" id="valor" value="{{ $medida->valor }}">
                                </div>
                                <div class="form-group">
                                    <label for="unidad{{ $index }}">Unidad {{ $index }}</label>
                                    <select name="unidad" id="unidad" class="form-select">
                                        <option value="">Seleccione una unidad</option>

                                        <option value="{{ $medida->id }}"
                                            {{ $medida->id == $medida->id ? 'selected' : '' }}>
                                            {{ $medida->unidad }}</option>
                                        @foreach ($unidades as $unidad)
                                            <option value="{{ $unidad }}">{{ $unidad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endforeach

                        </form>
                        <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST"
                            style="display: inline" id="deleteForm">
                            @csrf
                            @method('DELETE')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        //select2
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
