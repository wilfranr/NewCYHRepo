@extends('adminlte::page')

@section('content')

    <!-- Detalles básicos del Pedido -->
    <div class="mt-3 mb-5">
        <h4>
            <span class="badge badge-warning"><i class="fas fa-shopping-cart"></i>Pedido #{{ $pedido->id }}</span>
            <small class="float-right">Fecha de pedido: {{ $pedido->created_at }}</small><br>
            <small class="float-right">Vendedor: {{ $pedido->user->name }} <a
                    href="https://wa.me/+57{{ $pedido->user->phone }}" target="_blank"><i
                        class="fab fa-whatsapp"></i></a></small><br>
        </h4>
    </div>
    <div class="content-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- info Cliente -->
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    Datos del cliente
                </div>
                <div class="card-body pt-0">
                    <div class="row">

                        {{-- Datos básicos --}}
                        <div class="col-3">
                            <input type="hidden" name="tercero_id" id="tercero_id" value="{{ $pedido->tercero->id }}"
                                readonly>
                            <input type="hidden" name="user_id" id="user_id" value="{{ $pedido->user->id }}">
                            <input type="hidden" name="estado" id="estado" value="Costeo">
                            <input type="hidden" name="comentario" id="comentario" value="{{ $pedido->comentario }}">
                            @if ($pedido->contacto)
                                <input type="hidden" name="contacto_id" id="contacto_id"
                                    value="{{ $pedido->contacto->id }}">
                            @endif
                            @if ($pedido->maquinas->count() >= 1)
                                <input type="hidden" name="maquina_id" id="maquina_id"
                                    value="{{ $pedido->maquinas->first()->id }}">
                            @endif
                            <h2 class="lead"><b><strong>
                                        <a href="{{ route('terceros.edit', $pedido->tercero->id) }}" target="_blank">
                                            {{ $pedido->tercero->nombre }}
                                        </a>
                                    </strong></b></h2>
                            <p class="text-muted text-sm">
                                @if ($pedido->tercero->tipo_documento == 'CC')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> CC:</span>
                                @elseif ($pedido->tercero->tipo_documento == 'NIT')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> NIT:</span>
                                @elseif ($pedido->tercero->tipo_documento == 'CE')
                                    <span class=""><i class="fas fa-lg fa-id-card"></i> CE:</span>
                                @endif
                                </b> {{ $pedido->tercero->numero_documento }}-{{ $pedido->tercero->dv }}
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span><i class="fas fa-lg fa-building"></i> Dirección:</span>
                                </b> {{ $pedido->tercero->direccion }}
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i> Teléfono:</span>
                                </b>
                                <a href="https://wa.me/+57{{ $pedido->tercero->telefono }}" target="_blank">
                                    {{ $pedido->tercero->telefono }}
                                </a>
                            </p>
                            @if ($pedido->tercero->email)
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                                    </b>
                                    <a href="mailto:{{ $pedido->tercero->email }}" target="_blank">
                                        {{ $pedido->tercero->email }}
                                    </a>
                                </p>
                            @endif
                            @if ($pedido->tercero->email_factura_electronica)
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-envelope"></i> Email Facturación:</span>
                                    </b>
                                    <a href="mailto:{{ $pedido->tercero->email_factura_electronica }}">
                                        <span>{{ $pedido->tercero->email_factura_electronica }}</span>
                                    </a>
                                </p>
                            @endif
                        </div>

                        {{-- Contactos del cliente --}}
                        <div class="col-3">
                            <p>Contacto del cliente</p>
                            @if ($pedido->contacto)
                                <h2 class="lead">
                                    <b>
                                        <strong>
                                            {{ $pedido->contacto->nombre }}
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
                                <p class="text-muted text-sm">
                                    <b>
                                        <span><i class="fa fa-lg fa-briefcase"></i>
                                            Cargo:</span>
                                    </b><span>{{ $pedido->contacto->cargo }}</span>
                                </p>
                            @else
                                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    El cliente no cuenta con contactos asociados.</p>
                            @endif
                        </div>

                        {{-- Maquina del cliente asociada al pedido --}}
                        <div class="col-3">
                            <p>Maquina asociada al pedido</p>
                            {{-- Tooltip Máquina --}}
                            <h2 class="lead">
                                @foreach ($pedido->maquinas as $maquina)
                                @endforeach
                                <strong>
                                    <h2 class="lead">
                                        <b>
                                            <a href="{{ route('maquinas.edit', $maquina->id) }}" target="_blank">
                                                <strong id="nombre_maquina">{{ $maquina->tipo }}</strong>
                                            </a>
                                        </b>
                                        <i class="fa fa-question-circle text-warning" aria-hidden="true"
                                            data-toggle="tooltip" data-placement="top"
                                            title="Aquí se muestra una descripción corta de la máquina."></i>
                                    </h2>
                                </strong>
                            </h2>


                            <p class="text-muted text-sm">
                                <b><span>Marca:</span></b>
                                @foreach ($maquina->marcas as $marcaMaquina)
                                    <input type="hidden" name="maquinas[{{ $maquina->id }}][marcas][]"
                                        value="{{ implode(',', $maquina->marcas->pluck('id')->toArray()) }}">
                                    <span id="marca">
                                        {{ $marcaMaquina->nombre }}
                                    </span>
                                @endforeach
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Modelo:</span></b>
                                <span id="modelo">{{ $maquina->modelo }}</span>
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Serie:</span></b>
                                <span id="serie">{{ $maquina->serie }}</span>
                            </p>
                            <p class="text-muted text-sm">
                                <b><span>Arreglo:</span></b>
                                <span id="arreglo">{{ $maquina->arreglo }}</span>
                            </p>
                        </div>

                        {{-- Fotos de la máquina --}}
                        <div class="col-3 text-center">
                            {{-- mostrar foto de imágen de máquina --}}
                            <div class="text-center mb-3">
                                <a href="{{ asset('storage/maquinas/' . $maquina->foto) }}" id="foto_maquina_link"
                                    target="_blank">
                                    <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}"
                                        class="img-circle img-fluid" id="foto_maquina" alt="Foto Máquina"
                                        width="200">
                                </a>
                            </div>
                            {{-- mostrar foto de imágen de Id de máquina --}}
                            <div class="text-center">
                                <a href="{{ asset('storage/maquinas/' . $maquina->fotoId) }}" id="foto_id_link"
                                    target="_blank">
                                    <img src="{{ asset('storage/maquinas/' . $maquina->fotoId) }}" class=""
                                        id="foto_id" width="200" height="100" alt="Id Máquina">
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($pedido->comentario)
                        {{-- Comentarios del pedido --}}
                        <div>
                            Comentarios del pedido: <br>
                            <textarea class="form-control" disabled>{{ $pedido->comentario }}</textarea>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Tabla con artículos --}}
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    <input type="hidden" name="contador"
                        value="{{ $contador = $pedido->articulosTemporales->count() + $pedido->articulos->count() }}"
                        id="contador">
                    {{-- <p>{{$contador = $pedido->articulosTemporales->count() + $pedido->articulos->count()}} Artículos</p> --}}

                </div>
                <div class="card-body pt-0">
                    <table id="articulos" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 3%">#</th>
                                <th style="width: 35%;">Referencia</th>
                                <th style="width: 35%;">Definición</th>
                                <th style="width: 25%;">Sistema</th>
                                <th style="width: 25%;">Marca</th>
                                <th style="width: 10%;">Cantidad</th>
                                <th style="width: 30%;">Comentarios</th>
                                <th style="width: 10%;">Imágen</th>
                                <th style="width: 3%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Artículos Temporales --}}
                            @if ($pedido->articulosTemporales->count() >= 1)
                                @foreach ($pedido->articulosTemporales as $index => $articuloTemporal)
                                    <tr>
                                        <td>
                                            <strong>{{ $index + 1 }}</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Display the value of $articuloTemporal->referencia --}}
                                                {{ $articuloTemporal->referencia }}
                                                <select class="form-control" id="referencia{{ $index + 1 }}"
                                                    style="width: 100%;" name="referencia{{ $index + 1 }}" required onchange="mostrarDefinicion()">
                                                    {{-- Rest of the code --}}
                                                    @foreach ($referencias as $referencia)
                                                        <option value="{{ $referencia->referencia }}">
                                                            {{ $referencia->referencia }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('referencia')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <input type="text" class="form-control"
                                                    value=""
                                                    name="definicion{{ $index + 1 }}" style="width: 100%;" readonly>
                                            </div>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Si vienen sistemas desde un articulo temporal --}}
                                                @if (!empty($articuloTemporal->sistemas) && count($articuloTemporal->sistemas) > 0)
                                                    <select class="form-control select2" style="width: 100%;"
                                                        name="sistema{{ $index + 1 }}" required>
                                                        <option value="{{ $articuloTemporal->sistemas[0]->id }}">
                                                            {{ $articuloTemporal->sistemas[0]->nombre }}
                                                        </option>
                                                        @foreach ($sistemas as $sistema)
                                                            @if ($sistema->id !== $articuloTemporal->sistemas[0]->id)
                                                                <option value="{{ $sistema->id }}">
                                                                    {{ $sistema->nombre }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @else
                                                    {{-- Si no vienen sistemas desde un articulo temporal --}}
                                                    <select class="form-control select2" style="width: 100%;"
                                                        name="sistema{{ $index + 1 }}" required>
                                                        <option value="">Seleccione un sistema</option>
                                                        @foreach ($sistemas as $sistema)
                                                            <option value="{{ $sistema->id }}">
                                                                {{ $sistema->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                                @error('sistema')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            {{-- Marca --}}
                                            <div class="d-flex">
                                                <select class="form-control select2" style="width: 100%;"
                                                    name="marca{{ $index + 1 }}" required>
                                                    <option value="">Seleccione una marca</option>
                                                    @foreach ($marcas as $marca)
                                                        <option value="{{ $marca->nombre }}">
                                                            {{ $marca->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('marca')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </td>
                                        <td>
                                            <input type="number" class="form-control"
                                                name="cantidad{{ $index + 1 }}"
                                                value="{{ $articuloTemporal->cantidad }}" style="width: 100px;">
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="comentarios{{ $index + 1 }}">
                                                @if ($articuloTemporal->comentarios)
Comentario del vendedor: {{ $articuloTemporal->comentarios }}@else{{ $articuloTemporal->comentarios }}
@endif
                                            </textarea>
                                        </td>
                                        <!-- Aca va la foto del articulo temporal -->
                                        @if ($articuloTemporal->fotosArticuloTemporal->count() == 1)
                                            <td>
                                                <a href="{{ asset('storage/fotos-articulo-temporal/' . $articuloTemporal->fotosArticuloTemporal->first()->foto_path) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/fotos-articulo-temporal/' . $articuloTemporal->fotosArticuloTemporal->first()->foto_path) }}"
                                                        alt="Foto del artículo" width="50px">
                                                </a>
                                            </td>
                                        @elseif ($articuloTemporal->fotosArticuloTemporal->count() > 1)
                                            <td>
                                                {{-- Boton modal para ver imagenes --}}
                                                <button type="button" class="btn btn-outline-primary"
                                                    data-toggle="modal" data-target="#modalImagenes"><ion-icon
                                                        name="images-outline"></ion-icon>
                                                </button>
                                            </td>
                                        @elseif ($articuloTemporal->referencia == null)
                                            <td>
                                                <img src="{{ asset('storage/fotos-articulo-temporal/no-imagen.jpg') }}"
                                                    alt="Foto del artículo" width="50px">
                                            </td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-outline-danger delete-row-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            {{-- Artículos Permanentes --}}
                            @if ($pedido->articulos->count() >= 1)
                                {{-- Recorrer los articulos reales --}}
                                @foreach ($pedido->articulos as $index => $articulo)
                                    <tr>
                                        <td>
                                            <strong>{{ $index + 1 }}</strong>
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <select class="form-control select2" style="width: 100%;"
                                                    name="referencia{{ $index + 1 }}" required>
                                                    <option value="{{ $articulo->referencia }}">
                                                        {{ $articulo->referencia }}--{{ $articulo->definicion }}
                                                    </option>
                                                    @foreach ($referencias as $referencia)
                                                        <option value="{{ $referencia->referencia }}">
                                                            {{ $referencia->referencia }}--{{ $referencia->definicion }}
                                                        </option>
                                                    @endforeach
                                                    <input type="hidden" value="{{ $articulo->definicion }}"
                                                        name="definicion{{ $index + 1 }}">
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Aca va un select con el sistema asociado al artículo de este pedido --}}
                                                @php
                                                    // Obtener el sistema asociado al artículo de este pedido
                                                    $sistemaAsociado = $articulo
                                                        ->sistemaPedidoEnPedido($pedido->id)
                                                        ->first();
                                                    $sistemaId = optional($sistemaAsociado)->id;
                                                @endphp

                                                <select class="form-control select2"
                                                    name="sistema_id{{ $index + 1 }}">
                                                    @if ($sistemaAsociado)
                                                        <option value="{{ $sistemaId }}" selected>
                                                            {{ $sistemaAsociado->nombre }}
                                                        </option>
                                                    @endif

                                                    {{-- Mostrar otros sistemas --}}
                                                    @foreach ($sistemas as $sistema)
                                                        @if ($sistemaAsociado && $sistema->id == $sistemaAsociado->id)
                                                            @continue; {{-- Saltar el sistema ya seleccionado --}}
                                                        @endif
                                                        <option value="{{ $sistema->id }}">
                                                            {{ $sistema->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control"
                                                name="cantidad{{ $index + 1 }}"
                                                value="{{ $articulo->pivot->cantidad }}" style="width: 100px;">
                                        </td>
                                        <td>
                                            @if ($articulo->pivot->comentario)
                                                <textarea class="form-control" name="comentarios{{ $index + 1 }}">Comentario del vendedor:{{ $articulo->pivot->comentario }}</textarea>
                                            @else
                                                <textarea class="form-control" name="comentarios{{ $index + 1 }}">{{ $articulo->pivot->comentario }}</textarea>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                target="_blank">
                                                <img src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                    alt="Foto de la lista" width="100px">
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-danger delete-row-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>


                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{-- Botones de agregar y crear --}}
                    <div class="d-flex justify-content-between">
                        <div>
                            <button type="button" class="btn btn-outline-primary" id="addRow">
                                <i class="fas fa-plus"></i>
                                Agregar artículo
                            </button>
                        </div>
                        <div>
                            <a href="{{ route('articulos.create') }}" class="btn btn-outline-success"
                                id="crearArticuloBtn" target="_blank">
                                <i class="fas fa-cube"></i>
                                Crear artículo nuevo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Footer --}}
            <div class="card-footer">
                <div class="text-right">

                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fa fa-paper-plane"></i> Enviar a costeo
                    </button>

                </div>
            </div>

            {{-- <input type="text" name="contador" value="1"> --}}


        </form>

    </div>
    {{-- Modal ver imagenes --}}
    <div class="modal fade" id="modalImagenes" tabindex="-1" aria-labelledby="modalImagenesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalImagenesLabel">Imágenes asociadas al artículo</h5>
                    <button type="button" class="close" data-dismiss="modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($pedido->articulosTemporales as $index => $articuloTemporal)
                        @if ($articuloTemporal)
                            {{-- Aca va el carousel --}}
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($articuloTemporal->fotosArticuloTemporal as $index => $foto)
                                        @if ($index == 0)
                                            <div class="carousel-item active">
                                                <img src="{{ asset('storage/fotos-articulo-temporal/' . $foto->foto_path) }}"
                                                    class="d-block w-100" alt="Foto del artículo">
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img src="{{ asset('storage/fotos-articulo-temporal/' . $foto->foto_path) }}"
                                                    class="d-block w-100" alt="Foto del artículo">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <ion-icon name="chevron-back-outline"
                                        style="color: black; font-size: 40px;"></ion-icon>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <ion-icon name="chevron-forward-outline"
                                        style="color: black; font-size: 40px;"></ion-icon>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                            {{-- Fin carousel --}}
                        @else
                            <p>No hay imágenes asociadas al artículo</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Fin modal ver imagenes --}}
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            var contador = $('#contador').val();
            // Evento click para agregar una nueva fila
            $(document).on('click', '#addRow', function() {
                $('#agregarReferencia').hide();
                contador++;
                var fila = '<tr>' +
                    '<td><strong>' + contador + '</strong></td>' +
                    '<td>' +
                    '<div class="d-flex">' +
                    '<select class="form-control select2" style="width: 100%;" id="referencia" name="referencia' +
                    contador + '" required>' +
                    '<option value="">Seleccione una referencia</option>' +
                    '@foreach ($referencias as $referencia)' +
                    '<option value="{{ $referencia->referencia }}">' +
                    '{{ $referencia->referencia }}--{{ $referencia->definicion }}</option>' +
                    '@endforeach' +
                    '</select>' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<div class="d-flex">' +
                    '<select class="form-control select2" style="width: 100%;" id="sistema" name="sistema' +
                    contador + '" required>' +
                    '<option value="">Seleccione un sistema</option>' +
                    '@foreach ($sistemas as $sistema)' +
                    '<option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>' +
                    '@endforeach' +
                    '</select>' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<input type="number" class="form-control" value="1" style="width: 100px;" name="cantidad' +
                    contador + '">' +
                    '</td>' +
                    '<td>' +
                    '<textarea class="form-control" name="comentarios' + contador + '"></textarea>' +
                    '</td>' +
                    '<td>' +
                    '<button type="button" class="btn btn-outline-danger delete-row-btn">' +
                    '<i class="fas fa-trash"></i>' +
                    '</button>' +
                    '</td>' +
                    '</tr>';
                $('#articulos tbody').append(fila);
                $('.select2').select2();

                //ocultar div agregar referencia
                $('#agregarReferencia').hide();

                //aumnetar contador
                $('#contador').val(contador);
            });


        });

        // Evento change para eliminar fila
        $(document).on('click', '.delete-row-btn', function() {
            $(this).closest('tr').remove();
            //disminuir contador
            var contador = $('#contador').val();
            contador--;
            $('#contador').val(contador);
        });
        //mostrar div agregar referencia
        function agregarReferencia() {
            $('#agregarReferencia').show();
        }

        //función que muestra la definición de la referencia seleccionada
        function mostrarDefinicion() {
            var referencia = $('#referencia{{ $index + 1 }}').val();
            console.log(referencia);

            // Realizar una consulta AJAX para obtener la definición del artículo
            $.ajax({
                url: '/articulos/search-definicion', // Cambiar la ruta a la que definiste en el controlador
                method: 'GET',
                data: {
                    referencia: referencia
                },
                success: function(response) {
                    // Asignar el valor de la definición al input correspondiente
                    $('#definicion{{ $index + 1 }}').val(response.definicion);
                },
                error: function() {
                    console.log('Error al obtener la definición del artículo');
                }
            });
        }
    </script>
@endsection
