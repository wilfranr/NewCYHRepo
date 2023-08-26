@extends('adminlte::page')

@section('content')
    <div class="content-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar lista padre') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('listasPadre.update', ['id' => $listaPadre->id]) }}"
                            id="form">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="nombre"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ $listaPadre->nombre }}" required autocomplete="nombre" autofocus
                                        placeholder="{{ $listaPadre->nombre }}">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('listasPadre.destroy', $listaPadre->id) }}" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
