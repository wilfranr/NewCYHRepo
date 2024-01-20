@extends('adminlte::page')

@section('content')
    <h1>Busqueda de articulo por referencia</h1>
    {{-- boton para busqueda de articulo --}}
    <div class="row">
        <div class="col-6">
            <form action="{{ route('articulos.buscar') }}" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg" name="buscar"
                        placeholder="Buscar por referencia">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Mostrar resultados de la busqueda --}}
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>Marca</th>
                        <th>Definicion</th>
                        <th>Comentarios</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                  @foereach($referencias as $referencia)
                    <tr>
                        <td>{{ $referencia->referencia }}</td>
                        <td>{{ $referencia->articulo->marca }}</td>
                        <td>{{ $referencia->articulo->definicion }}</td>
                        <td>{{ $referencia->articulo->comentarios }}</td>
                        <td>
                            <a href="{{ asset('storage/articulos/' . $referencia->articulo->fotoDescriptiva) }}"
                                target="_blank">
                                <img src="{{ asset('storage/articulos/' . $referencia->articulo->fotoDescriptiva) }}"
                                    alt="Foto de la lista" width="100px">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

                        <h1>Juegos</h1>
                        <p>Kit 1</p>

                        {{-- Select para seleccionar los repuestos que hacen parte del kit --}}
                        <div class="form-group">
                            <label for="repuestos">Repuestos</label>
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control select2" name="repuestos"
                                        data-placeholder="Seleccione los repuestos que hacen parte del kit"
                                        style="width: 100%;">
                                        @foreach ($repuestos as $repuesto)
                                            <option value="{{ $repuesto }}">{{ $repuesto }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">

                                    <input class="form-control" type="number" placeholder="Cantidad" id="cantidad"
                                        name="cantidad" required>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary" id="add_repuesto">+</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="table table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>Repuesto</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    @endsection


                    @section('js')
                        <script>
                            //select2
                            $(document).ready(function() {
                                $('.select2').select2();
                            });
                            //funcion para agregar repuestos, agregar una fila debajo del select con el repuesto y la cantidad selecionados
                            $("#add_repuesto").click(function() {
                                var repuesto = $("select[name=repuestos]").val();
                                var cantidad = $("input[name=cantidad]").val();
                                var fila = '<tr><td>' + repuesto + '</td><td>' + cantidad + '</td></tr>';
                                $("table tbody").append(fila);
                            });
                        </script>
                    @endsection
