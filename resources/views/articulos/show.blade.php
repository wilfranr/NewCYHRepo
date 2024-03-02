@extends('adminlte::page')

@section('content')
<!-- Este div crea un contenedor principal para la página -->
    <div class="container">
            <!-- Aquí se inicia una fila centrada en el contenedor --> 
        <div class="row justify-content-center">
            <!-- Aquí se crea una columna de 8 espacios para el contenido -->
            <div class="col-md-8">
                <!-- Aquí se crea una tarjeta -->
                <div class="card">
                    <!-- Aquí se crea el encabezado de la tarjeta -->
                    {{-- <div class="card-header">{{ $articulo->definicion }}</div> --}}
                    <!-- Aquí se crea el cuerpo de la tarjeta -->

                    {{-- inicio del cuerpo de la tarjeta --}}
                    <div class="card-body">
                      <!-- Comienza una fila dentro del cuerpo de la tarjeta -->   
                        <div class="row">
                            <!-- Primera columna (3 de 12 columnas) que contiene una etiqueta de texto en negrita -->
                            <div class="col-md-3 font-weight-bold">Definición:</div>
                            <!-- Segunda columna (9 de 12 columnas) que contiene el valor de la definición del artículo -->    
                            {{-- <div class="col-md-9">{{ $articulo->definicion }}</div> --}}
                            <!-- Cierre de la fila dentro del cuerpo de la tarjeta -->        
                        </div>

                        <div class="row">
                            <div class="col-md-3 font-weight-bold">Referencia:</div>
                            <!-- Primera columna (3 de 12 columnas) que contiene una etiqueta de texto en negrita -->
                            {{-- <div class="col-md-9">{{ $articulo->referencia }}</div> --}}
                            <!-- Segunda columna (9 de 12 columnas) que contiene el valor de la referencia del artículo -->
                        </div>

                        <div class="row">
                            <div class="col-md-3 font-weight-bold">Marca:</div>
                            {{-- <div class="col-md-9">{{ $articulo->marca }}</div> --}}
                        </div>

                        <div class="row">
                            <div class="col-md-3 font-weight-bold">Comentarios:</div>
                            {{-- <div class="col-md-9">{{ $articulo->comentarios }}</div> --}}
                        </div>


                        <div class="row">
                            <div class="col-md-3 font-weight-bold">Foto descriptiva:</div>
                            {{-- <div class="col-md-9"><a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}" --}}
                                    {{-- target="_blank"><img --}}
                                        {{-- src="{{ asset('/storage/articulos/' . $articulo->fotoDescriptiva) }}" --}}
                                        {{-- alt="Foto de articulo" width="200px"></a> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold">Foto medida:</div>
                            <div class="col-md-9">
                                {{-- <a href="{{ asset('storage/articulos/' . $articulo->fotoMedida) }}" target="_blank">
                                    <img src="{{ asset('storage/articulos/' . $articulo->fotoMedida) }}"
                                        alt="Foto de medida" width="200px">
                                </a> --}}
                            </div>
                        </div>
                        {{-- @foreach ($articulo->medidas as $index => $medida)
                            <h3>Medida {{ $index + 1 }}</h3>
                            <div class="row">
                                <div class="col-md-3 font-weight-bold">Tipo Medida:</div>
                                <p>{{ isset($medida->nombre) ? $medida->nombre : '' }} </p>
                            </div>
                            <div class="row">
                                <div class="col-md-3 font-weight-bold">Valor:</div>
                                <p>{{ isset($medida->valor) ? $medida->valor : '' }}
                                    {{ isset($medida->unidad) ? $medida->unidad : '' }} </p>
                            </div>
                            <div class="row">
                                <div class="col-md-3 font-weight-bold">Id:</div>
                                <p>{{ isset($medida->idMedida) ? $medida->idMedida : '' }} </p>
                            </div>
                        @endforeach --}}



                        <div class="row mt-3">
                            {{-- <div class="col-md-12">
                                <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Volver</a>
                                <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
