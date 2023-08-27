@extends('adminlte::page')

@section('content')
    {{-- Info de pedido --}}
    <div class="mt-3 mb-5">
        <h4>
            <span class="badge badge-warning"><i class="fas fa-shopping-cart"></i>Pedido #{{ $pedido->id }}</span>
            <small class="float-right">Fecha de pedido: {{ $pedido->created_at }}</small><br>
            <small class="float-right">Vendedor: {{ $pedido->user->name }} <a
                    href="https://wa.me/+57{{ $pedido->user->phone }}" target="_blank"><i
                        class="fab fa-whatsapp"></i></a></small><br>

        </h4>
    </div>
    {{-- Fin de info de pedido --}}

    {{-- Formulario --}}
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- info cliente -->
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                Datos del cliente
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-3">
                        <p>Cliente</p>
                        <input type="hidden" name="tercero_id" id="tercero_id" value="{{ $pedido->tercero->id }}" readonly>
                        <input type="hidden" name="user_id" id="user_id" value="{{ $pedido->user->id }}">
                        <input type="hidden" name="estado" id="estado" value="Costeo">
                        <input type="hidden" name="comentario" id="comentario" value="{{ $pedido->comentario }}">
                        {{-- Si existe contacto --}}
                        @if ($pedido->contacto)
                            <input type="hidden" name="contacto_id" id="contacto_id" value="{{ $pedido->contacto->id }}">
                        @endif
                        {{-- si existe maquina --}}
                        @if ($pedido->maquinas->count() >= 1)
                            <input type="hidden" name="maquina_id" id="maquina_id"
                                value="{{ $pedido->maquinas->first()->id }}">
                        @endif
                        <h2 class="lead"><b><strong>{{ $pedido->tercero->nombre }}</strong></b></h2>
                        <p class="text-muted text-sm">
                            <b>
                                @if ($pedido->tercero->tipo_documento == 'cedula')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> CC:</span>
                                @elseif ($pedido->tercero->tipo_documento == 'nit')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> NIT:</span>
                                @elseif ($pedido->tercero->tipo_documento == 'ce')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> CE:</span>
                                @endif
                            </b> {{ $pedido->tercero->numero_documento }}
                        </p>
                        <p class="text-muted text-sm">
                            <b>
                                <span class=""><i class="fas fa-lg fa-building"></i> Dirección:</span>
                            </b> {{ $pedido->tercero->direccion }}
                        </p>
                        <p class="text-muted text-sm">
                            <b>
                                <span class=""><i class="fab fa-2x fa-whatsapp"></i> Teléfono:</span>
                            </b>
                            <a href="https://wa.me/+57{{ $pedido->tercero->telefono }}" target="_blank">
                                {{ $pedido->tercero->telefono }}
                            </a>
                        </p>
                        <p class="text-muted text-sm">
                            <b>
                                <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                            </b>
                            <a href="mailto:{{ $pedido->tercero->email }}" target="_blank">
                                {{ $pedido->tercero->email }}
                            </a>
                        </p>
                    </div>
                    <div class="col-3">
                        <p>Contacto del cliente</p>
                        <h2 class="lead">
                            <b>
                                <strong>
                                    @if ($pedido->contacto)
                                        {{ $pedido->contacto->nombre }}
                                    @else
                                        N/A
                                    @endif
                                </strong>
                            </b>
                        </h2>
                        <p class="text-muted text-sm">
                            <b>
                                <span class=""><i class="fab fa-2x fa-whatsapp"></i> Teléfono:</span>
                            </b>
                            @if ($pedido->contacto)
                                <a href="https://wa.me/+57{{ $pedido->contacto->telefono }}" target="_blank">
                                    {{ $pedido->contacto->telefono }}
                                @else
                                    N/A
                            @endif
                            </a>
                        </p>
                        <p class="text-muted text-sm">
                            <b>
                                <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                            </b>
                            @if ($pedido->contacto)
                                <a href="mailto:{{ $pedido->contacto->email }}">
                                    {{ $pedido->contacto->email }}
                                </a>
                            @else
                                N/A
                            @endif
                        </p>
                    </div>
                    <div class="col-3">
                        <p>Maquinas asociadas al pedido</p>
                        @if ($pedido->maquinas->count() >= 1)
                            <h2 class="lead">
                                <strong>
                                    @foreach ($pedido->maquinas as $maquina)
                                        <ul>
                                            <li>
                                                <b>
                                                    <i class="fa fa-wrench"></i>
                                                    <a href="{{ route('maquinas.edit', $maquina->id) }}" target="_blank">
                                                        {{ $maquina->tipo }}
                                                    </a>
                                                </b>
                                                <p>{{ $maquina->marca }}</p>
                                                <p>{{ $maquina->modelo }}</p>
                                            </li>
                                        </ul>
                                    @endforeach
                                </strong>

                            </h2>


                    </div>
                    <div class="col-3 text-center">
                        <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}" target="_blank">
                            <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}" alt="user-avatar"
                                class="img-circle img-fluid">
                        </a>
                    </div>
                @else
                    N/A
                    @endif
                </div>
                <div>
                    Comentarios del pedido: <br>
                    <textarea class="form-control" disabled>{{ $pedido->comentario }}</textarea>

                </div>
                
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <a href="https://wa.me/+57{{ $pedido->tercero->telefono }}" class="btn btn-sm bg-teal" target="_blank">
                        <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ route('terceros.edit', $pedido->tercero->id) }}" class="btn btn-sm btn-primary"
                        target="_blank">
                        <i class="fas fa-user"></i> Ver detalle
                    </a>
                </div>
            </div>
        </div>

        <!-- Card articulo -->
        @foreach ($pedido->articulos as $index => $articulo)
            @if ($pedido->articulos->count() >= 1)
                <div class="card bg-gradient-secondary collapsed-card">
                @else
                    <div class="card bg-gradient-secondary">
            @endif

            <div class="card-header border-0" data-card-widget="collapse">
                <h3 class="card-title text-uppercase">
                    <i class="fa fa-boxes"></i>
                    {{ $articulo->definicion }} -- {{ $articulo->referencia }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-warning btn-sm " data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-warning btn-sm"
                        target="_blank" data-toggle="tooltip" title="Ver detalle del artículo">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <!-- /. tools -->
            </div>

            <!-- /.card-header -->
            <div class="card-body pt-0">
                
                <!--Tabla de articulos y proveedores -->
                <div id="" style="width: 100%">
                    <table id="articulos" class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th style="width: 45%;">Referencia</th>
                                <th style="width: 10%;">Cantidad</th>
                                <th style="width: 30%;">Comentarios</th>
                                <th style="width: 10%;">Imágen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <input type="text" value="{{ $articulo->referencia }}" class="form-control"
                                            name="referencia{{ $index + 1 }}" disabled>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="cantidad{{ $index + 1 }}"
                                        value="{{ $articulo->pivot->cantidad }}" disabled>
                                </td>
                                <td>
                                    <textarea class="form-control" name="comentarios{{ $index + 1 }}" disabled>{{ $articulo->comentarios }}</textarea>
                                </td>
                                <!-- Aca va la foto del articulo  -->
                                <td>
                                    <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                        target="_blank">
                                        <img src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                            alt="Foto de la lista" width="65px">
                                    </a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    {{-- Proveedores naciones --}}
                    <div class="card bg-gradient-light">
                        <div class="card-header border-0">
                            <h3 class="card-title text-uppercase">
                                Proveedores Nacionales
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- Tabla con proveedores --}}
                            <table id="proveedores" class="table table-bordered table-striped mt-3">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Check</th>
                                        <th>Proveedor</th>
                                        <th class="width: 20%;">Marca</th>
                                        <th class="width: 20%;">Entrega</th>
                                        <th>Cantidad</th>
                                        <th>Peso(lbs)</th>
                                        {{-- <th>Costo $Us</th> --}}
                                        <th>Costo $Col</th>
                                        <th>Utilidad (%)</th>
                                        {{-- <th>Acción</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedoresNacionales as $index => $proveedor)
                                        <tr class="table-secondary">
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    {{-- parrafo con el nombre del proveedor --}}
                                                    <p class="text-uppercase">{{ $proveedor->nombre }}</p>
                                                    {{-- boton para ver el detalle del proveedor --}}
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-control" name="marca"
                                                    id="marca{{ $index }}">
                                                    @foreach ($proveedor->marcas as $marca)
                                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                {{-- Select de entrega --}}
                                                <select name="entrega" id="entrega-nacional{{ $index }}"
                                                    class="form-control entrega-selector"
                                                    data-index="{{ $index }}">
                                                    <option value="">Selecione...</option>
                                                    <option value="inmediata">Inmediata</option>
                                                    <option value="programada">Programada</option>
                                                </select>
                                                {{-- Campo de entrada de días --}}
                                                <input type="text" name="dias-nacional"
                                                    id="dias-nacional{{ $index }}" placeholder="Días para entrega"
                                                    class="form-control dias-input">
                                            </td>
                                            <td>
                                                {{-- Cantidad --}}
                                                <input type="number" class="form-control cantidad-nacional"
                                                    name="cantidad" value="{{ $articulo->pivot->cantidad }}"
                                                    data-index="{{ $index }}">
                                            </td>
                                            <td>
                                                {{-- peso --}}
                                                <input type="text" class="form-control" name="peso"
                                                    value="{{ $articulo->peso }}" id="peso{{ $index }}">
                                            </td>
                                            {{-- <td>
                                                <input type="text" class="form-control bg-secondary" name="costo_Us"
                                                    value="" id="costo-Us{{ $index }}" disabled>
                                            </td> --}}
                                            <td>
                                                {{-- costo_Col --}}
                                                <input type="text" class="form-control costo-nacional"
                                                    name="costo_nacional" data-index="{{ $index }}">
                                            </td>
                                            <td>
                                                {{-- Utilidad --}}
                                                <input type="text" class="form-control utilidad-nacional"
                                                    name="utilidad" value="" class="utilidad"
                                                    data-index="{{ $index }}">
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Proveedores internacionales --}}
                    <div class="card bg-gradient-light">
                        <div class="card-header border-0">
                            <h3 class="card-title text-uppercase">
                                Proveedores Internacionales
                            </h3>
                        </div>
                        <div class="card-body">
                            {{-- Tabla con proveedores --}}
                            <table id="proveedores" class="table table-bordered table-striped mt-3">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Check</th>
                                        <th>Proveedor</th>
                                        <th>Marca</th>
                                        <th>Entrega</th>
                                        <th>Cantidad</th>
                                        <th>Peso(lbs)</th>
                                        <th>Costo $Us</th>
                                        {{-- <th>Costo $Col</th> --}}
                                        <th>Utilidad (%)</th>
                                        {{-- <th>Acción</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedoresInternacionales as $index => $proveedor)
                                        <tr class="table-secondary">
                                            <td>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    {{-- parrafo con el nombre del proveedor --}}
                                                    <p class="text-uppercase">{{ $proveedor->nombre }}</p>
                                                    {{-- boton para ver el detalle del proveedor --}}
                                                </div>
                                            </td>
                                            <td>
                                                <select class="form-control" name="marca" id="marca">
                                                    @foreach ($proveedor->marcas as $marca)
                                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                {{-- Select de entrega --}}
                                                <select name="entrega" id="entrega-internacional{{ $index }}"
                                                    class="form-control entrega-internacional-selector"
                                                    data-index="{{ $index }}">
                                                    <option value="">Selecione...</option>
                                                    <option value="inmediata">Inmediata</option>
                                                    <option value="programada">Programada</option>
                                                </select>
                                                {{-- Campo de entrada de días --}}
                                                <input type="text" name="dias-internacional"
                                                    id="dias-internacional{{ $index }}"
                                                    placeholder="Días para entrega"
                                                    class="form-control dias-internacional-input">
                                            </td>
                                            <td>
                                                {{-- Cantidad --}}
                                                <input type="number" class="form-control" name="cantidad"
                                                    value="{{ $articulo->pivot->cantidad }}">
                                            </td>
                                            <td>
                                                {{-- peso --}}
                                                <input type="text" class="form-control" name="peso"
                                                    value="{{ $articulo->peso }}">
                                            </td>
                                            <td>
                                                {{-- costo_Us --}}
                                                <input type="text" class="form-control" name="costo_Us"
                                                    value="">
                                            </td>
                                            {{-- <td>
                                                <input type="text" class="form-control bg-secondary" name="costo_Col"
                                                    value="" disabled>
                                            </td> --}}
                                            <td>
                                                {{-- Utilidad --}}
                                                <input type="text" class="form-control" name="utilidad"
                                                    value="">
                                            </td>

                                            <td>
                                                {{-- Precio de venta --}}
                                                <input type="hidden" class="form-control" name="precio_venta"
                                                    value="">
                                            </td>


                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        @endforeach

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Enviar cotización</button>
        </div>
    </form>
    {{-- <input type="number" class="utilidad2" value="" placeholder="utilidad2" name="utilidad2">
    <input type="number" class="peso2" value="1" placeholder="peso" name="peso2">
    <input type="number" class="costo_Col2" value="" placeholder="costo" name="costo_Col2">
    <input type="number" class="cantidad" value="3" placeholder="cantidad" name="cantidad2"> --}}


@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Ocultar todos los campos de entrada de días inicialmente
            $('.dias-input').hide();
            $('.dias-internacional-input').hide();

            // Escuchar el evento de cambio en todos los selects con la clase "entrega-selector"
            $('.entrega-selector').on('change', function() {
                // Obtener el valor del atributo "data-index" del select
                var index = $(this).data('index');
                // Obtener el valor seleccionado en el select
                var selectedValue = $(this).val();

                // Mostrar u ocultar el campo de entrada de días según la opción seleccionada
                if (selectedValue === 'programada') {
                    $('#dias-nacional' + index).show();

                } else {
                    $('#dias-nacional' + index).hide();
                }
            });
            // Escuchar el evento de cambio en todos los selects con la clase "entrega-selector"
            $('.entrega-internacional-selector').on('change', function() {
                // Obtener el valor del atributo "data-index" del select
                var index = $(this).data('index');
                // Obtener el valor seleccionado en el select
                var selectedValue = $(this).val();

                // Mostrar u ocultar el campo de entrada de días según la opción seleccionada
                if (selectedValue === 'programada') {
                    $('#dias-internacional' + index).show();

                } else {
                    $('#dias-internacional' + index).hide();
                }
            });

            // Calcular el precio del proveedor nacional
            $('.utilidad-nacional').on('keyup', function() {
                var index = $(this).data('index');
                var utilidad = $(this).val();
                var cantidad = parseFloat($('.cantidad-nacional[data-index="' + index + '"]').val());
                var costo = parseFloat($('.costo-nacional[data-index="' + index + '"]').val());
                var precioVenta = ((costo * (utilidad / 100)) + costo) * cantidad;
                console.log('precioVenta', precioVenta);
            });
        });
    </script>
@endsection
