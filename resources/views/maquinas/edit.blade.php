@extends('adminlte::page')

@section('content')
    <div class="content-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Maquina') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('maquinas.update', $maquina->id) }}"
                            enctype="multipart/form-data" id="form">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="tipoMaquina"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" id="tipo_maquina" name="tipo_maquina">
                                        <option value="">Seleccione un tipo de máquina</option>
                                        @foreach ($tipo_maquina as $t)
                                            @if ($t->nombre == $maquina->tipo)
                                                <option value="{{ $t->nombre }}" selected>{{ $t->nombre }}</option>
                                            @else
                                                <option value="{{ $t->nombre }}">{{ $t->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="marca"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Marca Fabricante') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control select2" id="marca" name="marca" required>
                                        <option value="">Seleccione una marca fabricante</option>
                                        @foreach ($marca as $m)
                                            <option value="{{ $m->id }}"
                                                {{ $maquina->marcas->contains($m->id) ? 'selected' : '' }}>
                                                {{ $m->nombre }}
                                            </option>
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
                                            <option value="{{ $mo->nombre }}"
                                                {{ $mo->nombre == $maquina->modelo ? 'selected' : '' }}>
                                                {{ $mo->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="serie"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="serie" id="serie"
                                        value="{{ $maquina->serie }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="arreglo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Arreglo') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="arreglo" id="arreglo"
                                        value="{{ $maquina->arreglo }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fotoMaquina"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Foto Máquina') }}</label>
                                <div class="col-md-6">
                                    @if ($maquina->foto_maquina)
                                        <img src="{{ asset('storage/' . $maquina->foto_maquina) }}"
                                            alt="Foto de la máquina" width="200">
                                    @endif
                                    <input type="file" class="form-control" name="fotoMaquina" id="fotoMaquina">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fotoId"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Foto ID') }}</label>
                                <div class="col-md-6">
                                    @if ($maquina->foto_maquina)
                                        <img src="{{ asset('storage/' . $maquina->foto_maquina) }}" alt="Foto ID"
                                            width="200">
                                    @endif
                                    <input type="file" class="form-control" name="fotoId" id="fotoId">
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('maquinas.destroy', $maquina->id) }}"
                            style="display: inline-block;" id="deleteForm">
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
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
