@extends('adminlte::page')

@section('content')
    <div class="container">
        <form id="form" action="{{ route('listas.update', ['id' => $lista->id]) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" id="tipo" name="tipo">
                    @foreach ($listasPadre as $listaPadre)
                        @if ($listaPadre->nombre == $lista->tipo)
                            <option value="{{ $listaPadre->nombre }}" selected>{{ $listaPadre->nombre }}</option>
                        @else
                            <option value="{{ $listaPadre->nombre }}">{{ $listaPadre->nombre }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $lista->nombre }}"
                    required>
            </div>
            <div class="form-group">
                <label for="definicion">Definición:</label>
                <textarea name="definicion" class="form-control" id="definicion" cols="30"
                    rows="10">{{ $lista->definicion }}</textarea>

            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <a href="{{ asset('storage/listas/' . $lista->foto) }}" target="_blank">
                    <img src="{{ asset('storage/listas/' . $lista->foto) }}" alt="Foto de la lista"
                        width="200px">
                </a>
                <input type="file" class="form-control-file" name="fotoLista" id="fotoLista">
            </div>    
        </form>
        <form id="deleteForm" action="{{ route('listas.destroy', $lista->id) }}"
            method="POST" style="display: inline">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection
