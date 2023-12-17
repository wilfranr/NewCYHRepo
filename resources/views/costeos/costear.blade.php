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
    <form enctype="multipart/form-data" id="form" method="POST">
        @csrf

        <!-- info Cliente -->
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                Datos del cliente
            </div>
            <div class="card-body pt-0">
                <div class="row">

                    {{-- Datos básicos --}}
                    <div class="col-3">
                        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                        <input type="hidden" name="tercero_id" id="tercero_id" value="{{ $pedido->tercero->id }}" readonly>
                        <input type="hidden" name="user_id" id="user_id" value="{{ $pedido->user->id }}">
                        <input type="hidden" name="estado" id="estado" value="Costeo">
                        <input type="hidden" name="comentario" id="comentario" value="{{ $pedido->comentario }}">
                        @if ($pedido->contacto)
                            <input type="hidden" name="contacto_id" id="contacto_id" value="{{ $pedido->contacto->id }}">
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
                                    <i class="fa fa-question-circle text-warning" aria-hidden="true" data-toggle="tooltip"
                                        data-placement="top"
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
                                <img src="{{ asset('storage/maquinas/' . $maquina->foto) }}" class="img-circle img-fluid"
                                    id="foto_maquina" alt="Foto Máquina" width="200">
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
            {{-- <div class="card-footer">
                <div class="text-right">
                    <a href="https://wa.me/+57{{ $pedido->tercero->telefono }}" class="btn btn-sm bg-teal"
                        target="_blank">
                        <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{ route('terceros.edit', $pedido->tercero->id) }}" class="btn btn-sm btn-primary"
                        target="_blank">
                        <i class="fas fa-user"></i> Ver detalle
                    </a>
                </div>
            </div> --}}
        </div>

        <!-- Card articulo -->
        @foreach ($pedido->articulos as $index => $articulo)
            <div class="row">
                <div class="col-11">
                    @if ($pedido->articulos->count() >= 1)
                        <div class="card bg-gradient-secondary  collapsed-card">
                        @else
                            <div class="card bg-gradient-secondary">
                    @endif
                    <div class="card-header border-0" data-card-widget="collapse" data-toggle="tooltip">
                        <h3 class="card-title text-uppercase">
                            <i class="fa fa-boxes"></i>
                            {{ $articulo->definicion }} -- {{ $articulo->referencia }}
                            <input type="hidden" name="articulos[{{ $index + 1 }}][id]"
                                value="{{ $articulo->id }}">
                            <input type="hidden" name="articulos[{{ $index + 1 }}][referencia]"
                                value="{{ $articulo->referencia }}">

                            {{-- <input type="hidden" name="referencia[{{ $index + 1 }}][id]" value="{{ $articulo->referencia }}"> --}}
                            {{-- <input type="hidden" name="definicion[{{ $index + 1 }}][id]" value="{{ $articulo->definicion }}"> --}}
                        </h3>
                        {{-- <div class="card-tools">
                            <button type="button" class="btn btn-warning btn-sm " data-card-widget="collapse"
                                data-toggle="tooltip" title="Expandir">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div> --}}
                    </div>
                    <div class="card-body pt-0">
                        <!--Tabla de articulos-->
                        <table id="articulos" class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 45%;">Referencia</th>
                                    <th style="width: 25%;">Sistema</th>
                                    <th style="width: 10%;">Cantidad</th>
                                    <th style="width: 30%;">Comentarios</th>
                                    <th style="width: 10%;">Imágen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <input type="text" value="{{ $articulo->id }}"
                                                class="form-control" name="referencia{{ $index + 1 }}" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{-- Obtener el sistema asociado al artículo de este pedido --}}
                                            @php
                                                $sistemaAsociado = $articulo->sistemaPedidoEnPedido($pedido->id)->first();
                                                $marcaAsociada = $marcaMaquina->id;

                                                // Obtener proveedores que manejen el sistema y la marca asociada
                                                $proveedoresFiltrados = $sistemaAsociado->terceros->filter(function ($proveedor) use ($marcaAsociada) {
                                                    return $proveedor->marcas->contains('id', $marcaAsociada);
                                                });

                                                // Dividir proveedores en nacionales e internacionales
                                                [$proveedoresNacionales, $proveedoresInternacionales] = $proveedoresFiltrados->partition(function ($proveedor) {
                                                    return $proveedor->PaisCodigo === 'COL';
                                                });

                                                // $proveedoresNacionales contiene proveedores nacionales
                                                // dd($proveedoresNacionales);
                                                // $proveedoresInternacionales contiene proveedores internacionales

                                            @endphp


                                            <input type="hidden" value="{{ $sistemaAsociado->id }}">
                                            <input type="text" class="form-control"
                                                name="sistema_id{{ $index + 1 }}"
                                                value="{{ $sistemaAsociado->nombre }}" disabled>
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
                        {{-- Proveedores nacionales --}}
                        <div class="card bg-gradient-light">
                            <div class="card-header border-0">
                                <h3 class="card-title text-uppercase">
                                    Proveedores Nacionales
                                </h3>
                            </div>
                            <div class="card-body">
                                {{-- Tabla con proveedores --}}
                                <table id="proveedores" class="table table-striped table-bordered mt-3">
                                    <thead class="table-dark">
                                        <tr>
                                            <th style="width: 5%;">Check</th>
                                            <th style="width: 10%;">Proveedor</th>
                                            <th style="width: 15%;">Marca</th>
                                            <th style="width: 15%;">Entrega</th>
                                            <th style="width: 5%;">Cant.</th>
                                            <th style="width: 10%;">Peso(lbs)</th>
                                            <th style="width: 10%;">Costo $Col</th>
                                            <th style="width: 10%;">Utilidad (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($proveedoresNacionales->count() >= 1)
                                            @foreach ($proveedoresNacionales as $index => $proveedor)
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" class="proveedor-checkbox"
                                                            name="proveedores[{{ $index }}][seleccionado]">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            {{-- link con el nombre del proveedor --}}
                                                            <a href="{{ route('terceros.edit', $proveedor->id) }}"
                                                                class="text-uppercase" target="_blank">
                                                                {{ $proveedor->nombre }}</a>
                                                            {{-- Campo oculto para el id del proveedor --}}
                                                            <input type="hidden"
                                                                name="proveedores[{{ $index }}][id]"
                                                                value="{{ $proveedor->id }}">
                                                            {{-- Campo oculto con el articulo --}}
                                                            <input type="hidden"
                                                                name="proveedores[{{ $index }}][articulo]"
                                                                value="{{ $articulo->id }}">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <select class="form-control"
                                                            name="proveedores[{{ $index }}][marca]"
                                                            id="marca{{ $index }}">
                                                            @foreach ($proveedor->marcas as $marca)
                                                                <option value="{{ $marca->id }}">
                                                                    {{ $marca->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        {{-- Select de entrega --}}
                                                        <select name="proveedores[{{ $index }}][entrega]"
                                                            id="entrega-nacional{{ $index }}"
                                                            class="form-control entrega-selector"
                                                            data-index="{{ $index }}">
                                                            <option value="">Selecione...</option>
                                                            <option value="INMEDIATA">Inmediata</option>
                                                            <option value="PROGRAMADA">Programada</option>
                                                        </select>
                                                        {{-- Campo de entrada de días --}}
                                                        <input type="text"
                                                            name="proveedores[{{ $index }}][dias]"
                                                            id="dias-nacional{{ $index }}"
                                                            placeholder="Días para entrega"
                                                            class="form-control dias-input">
                                                    </td>
                                                    <td>
                                                        {{-- Cantidad --}}
                                                        <input type="number" class="form-control cantidad-nacional"
                                                            name="proveedores[{{ $index }}][cantidad]"
                                                            value="{{ $articulo->pivot->cantidad }}"
                                                            data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- peso --}}
                                                        <input type="text" class="form-control"
                                                            name="proveedores[{{ $index }}][peso]"
                                                            value="{{ $articulo->peso }}" id="peso{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- costo_Col --}}
                                                        <input type="text" class="form-control costo-nacional"
                                                            name="proveedores[{{ $index }}][costo]"
                                                            data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- Utilidad --}}
                                                        <input type="text" class="form-control utilidad-nacional"
                                                            name="proveedores[{{ $index }}][utilidad]"
                                                            value="" class="utilidad"
                                                            data-index="{{ $index }}" placeholder="7% Sugerida">

                                                        {{-- Precio venta hidden --}}
                                                        <input type="hidden" class="form-control precio-venta-nacional"
                                                            name="proveedores[{{ $index }}][precioVenta]"
                                                            value="" data-index="{{ $index }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8">
                                                    <div class="alert alert-warning text-center">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                        No hay proveedores nacionales que manejen la marca y el sistema
                                                        de
                                                        este
                                                        artículo
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif

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
                                <table id="proveedores-internacionales" class="table table-bordered table-striped mt-3">
                                    <thead class="table-dark">
                                        <tr>
                                            <th style="width: 5%;">Check</th>
                                            <th style="width: 10%;">Proveedor</th>
                                            <th style="width: 15%;">Marca</th>
                                            <th style="width: 15%;">Entrega</th>
                                            <th style="width: 5%;">Cant.</th>
                                            <th style="width: 10%;">Peso(lbs)</th>
                                            <th style="width: 10%;">Costo $Us</th>
                                            <th style="width: 10%;">Utilidad (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $proveedoresInternacionales = $proveedoresInternacionales->filter(function ($proveedor) use ($sistemaAsociado) {
                                                // Verificar si el proveedor maneja la marca y el sistema asociados
                                                return $proveedor->sistemas->contains('id', $sistemaAsociado->id);
                                            });
                                            // dd($proveedoresInternacionales);
                                        @endphp
                                        @if ($proveedoresInternacionales->count() >= 1)
                                            @foreach ($proveedoresInternacionales as $index => $proveedor)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="proveedor-checkbox"
                                                            name="proveedores[{{ $index }}][seleccionado]">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('terceros.edit', $proveedor->id) }}"
                                                                class="text-uppercase" target="_blank">
                                                                {{-- enlace con el nombre del proveedor --}}
                                                                {{ $proveedor->nombre }}
                                                            </a>
                                                            {{-- Campo oculto para el id del proveedor --}}
                                                            <input type="hidden"
                                                                name="proveedoresInternacionales[{{ $index }}][id]"
                                                                value="{{ $proveedor->id }}"
                                                                data-index="{{ $index }}">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <select class="form-control"
                                                            name="proveedoresInternacionales[{{ $index }}][marca]"
                                                            id="marca-internacional{{ $index }}"
                                                            data-index="{{ $index }}">
                                                            @foreach ($proveedor->marcas as $marca)
                                                                <option value="{{ $marca->id }}">
                                                                    {{ $marca->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        {{-- Select de entrega --}}
                                                        <select
                                                            name="proveedoresInternacionales[{{ $index }}][entrega]"
                                                            id="entrega-internacional{{ $index }}"
                                                            class="form-control entrega-internacional-selector"
                                                            data-index="{{ $index }}">
                                                            <option value="">Selecione...</option>
                                                            <option value="inmediata">Inmediata</option>
                                                            <option value="programada">Programada</option>
                                                        </select>
                                                        {{-- Campo de entrada de días --}}
                                                        <input type="text"
                                                            name="provedoresInternacionales[{{ $index }}][dias]"
                                                            id="dias-internacional{{ $index }}"
                                                            placeholder="Días para entrega"
                                                            class="form-control dias-internacional-input"
                                                            data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- Cantidad --}}
                                                        <input type="number" class="form-control cantidad-internacional"
                                                            name="proveedoresInternacionales[{{ $index }}][cantidad-internacional]"
                                                            value="{{ $articulo->pivot->cantidad }}"
                                                            data-index="{{ $index }}"
                                                            data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- peso --}}
                                                        <input type="text" class="form-control peso-internacional"
                                                            name="proveedoresInternacionales[{{ $index }}][peso]"
                                                            value="{{ $articulo->peso }}"
                                                            data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- costo_Us --}}
                                                        <input type="text" class="form-control costo-internacional"
                                                            name="proveedoresInternacionales[{{ $index }}][costoUs]"
                                                            value="" data-index="{{ $index }}">
                                                    </td>
                                                    <td>
                                                        {{-- Utilidad --}}
                                                        <input type="text" class="form-control utilidad-internacional"
                                                            name="proveedoresInternacionales[{{ $index }}][utilidad]"
                                                            value="" data-index="{{ $index }}"
                                                            placeholder="7% Sugerida">
                                                    </td>
                                                    {{-- Precio de venta --}}
                                                    <input type="hidden" class="form-control precio-venta-internacional"
                                                        name="proveedoresInternacionales[{{ $index }}][precioVenta]"
                                                        value="" data-index="{{ $index }}">
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8">
                                                    <div class="alert alert-warning text-center">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                        No hay proveedores internacionales que manejen la marca y el
                                                        sistema
                                                        de
                                                        este artículo
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="col-0.5">
                <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-warning btn-sm align-middle"
                    target="_blank" data-toggle="tooltip" title="Ver detalle del artículo">
                    <i class="fas fa-eye"></i>
                </a>
            </div>
            </div>
        @endforeach
        {{-- guardar en input desde variable de sesión TRM --}}
        <input type="hidden" name="trm" class="trm" value="{{ session('trm') }}">
        {{-- guardar en input desde variable de sesión peso --}}
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-outline-success" id="generar-comparativo"
                    title="Generar Comparativo">
                    <ion-icon name="reader-outline"></ion-icon> Generar comparativo</button>
                <button type="button" class="btn btn-primary" id="generar-cotizacion"><ion-icon
                        name="receipt-outline"></ion-icon> Generar Cotización</button>
            </div>
        </div>
    </form>
    {{-- Fin de formulario --}}

    {{-- Modal comparativo --}}
    <div class="modal fade" id="modalGenerarComparativo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Cuadro comparativo <span id="">Pedido #{{ $pedido->id }}</span>
                    </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            {{-- Formulario para crear lista --}}
                            <form action="" method="POST" enctype="multipart/form-data"
                                id="form-generar-cotizacion">
                                @csrf
                                {{-- <input type="hidden" value="{{ $tercero->id }}" name="tercero_id"> --}}
                                @foreach ($pedido->articulos as $index => $articulo)
                                    <div class="form-group">
                                        <p>Artículo:
                                            <span>{{ $articulo->referencia }}</span>
                                        </p>
                                    </div>
                                    <table class="table table-striped" id="tabla-comparativo">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Entrega</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Valor (No incluye Iva)</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                @endforeach
                                <div class="d-flex justify-content-between">

                                    {{-- <button type="button" id="btn-generar-cotizacion"
                                        class="btn btn-primary">Aceptar</button> --}}
                                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Rechazar</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                if (selectedValue === 'PROGRAMADA') {
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
                console.log('index', index);
                var utilidad = $(this).val();
                var cantidad = parseFloat($('.cantidad-nacional[data-index="' + index + '"]').val());
                console.log('cantidad', cantidad);
                var costo = parseFloat($('.costo-nacional[data-index="' + index + '"]').val());
                var precioVenta = ((costo * (utilidad / 100)) + costo) * cantidad;
                console.log('precioVenta', precioVenta);
                $('.precio-venta-nacional[data-index="' + index + '"]').val(precioVenta);
            });
            //Calcular el precio del proveedor internacional
            $('.utilidad-internacional').on('keyup', function() {
                var index = $(this).data('index');
                console.log('index', index);
                var utilidad = $(this).val();
                console.log('utilidad', utilidad);
                var cantidad = parseFloat($('.cantidad-internacional[data-index="' + index + '"]').val());
                console.log('cantidad', cantidad);
                var costo = parseFloat($('.costo-internacional[data-index="' + index + '"]').val());
                console.log('costo', costo);
                var peso = parseFloat($('.peso-internacional[data-index="' + index + '"]').val());
                console.log('Peso', peso);
                var trm = parseFloat($('.trm').val());
                console.log('trm', trm);
                var precioVenta = ((peso * 2.15 + costo) * cantidad) * trm;
                console.log('precioVenta', precioVenta);
                $('.precio-venta-internacional[data-index="' + index + '"]').val(precioVenta);
            });

            $('#generar-comparativo').click(function() {
                //obtener proveedor seleccionado
                var proveedores = [];
                //si no hay proveedores seleccionados generar alerta
                if ($('.proveedor-checkbox:checked').length == 0) {
                    swal.fire({
                        title: "Error",
                        text: "Debe seleccionar al menos un proveedor",
                        icon: "error",
                    });
                    return false;
                } else {
                    $('.proveedor-checkbox:checked').each(function() {
                        var proveedor = {
                            id: $(this).closest('tr').find('input[name*="id"]').val(),
                            nombre: $(this).closest('tr').find('a').text(),
                            marca: $(this).closest('tr').find('select[name*="marca"]').val(),
                            entrega: $(this).closest('tr').find('select[name*="entrega"]')
                                .val(),
                            dias: $(this).closest('tr').find('input[name*="dias"]').val(),
                            cantidad: $(this).closest('tr').find('input[name*="cantidad"]')
                                .val(),
                            peso: $(this).closest('tr').find('input[name*="peso"]').val(),
                            costo: $(this).closest('tr').find('input[name*="costo"]').val(),
                            utilidad: $(this).closest('tr').find('input[name*="utilidad"]')
                                .val(),
                            precioVenta: $(this).closest('tr').find(
                                'input[name*="precioVenta"]').val(),
                        };
                        proveedores.push(proveedor);
                    });
                    //Agregar proveedores a la tabla del modal

                    var tabla = $('#tabla-comparativo tbody');
                    tabla.empty();
                    $.each(proveedores, function(index, proveedor) {
                        if (proveedor.entrega == '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe seleccionar el plazo de entrega los proveedores seleccionados",
                                icon: "error",
                            });
                            return false;
                        } else if (proveedor.costo == '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe ingresar el costo del artículo para los proveedores seleccionados",
                                icon: "error",
                            });
                            return false;
                        } else if (proveedor.utilidad == '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe ingresar la utilidad del artículo para los proveedores seleccionados",
                                icon: "error",
                            });
                            return false;
                        } else {
                            if (proveedor.entrega == 'INMEDIATA') {
                                proveedor.entrega = 'Inmediata';
                            } else {
                                proveedor.entrega = proveedor.dias + ' días';
                            }

                            var fila = '<tr>' +
                                '<td>' + (index + 1) + '</td>' +
                                '<td>' + proveedor.entrega + '</td>' +
                                '<td>' + proveedor.cantidad + '</td>' +
                                '<td>' + proveedor.precioVenta + '</td>' +
                                '</tr>';
                            tabla.append(fila);
                            $('#modalGenerarComparativo').modal('show');
                        }
                        var articulo = {
                            referencia: "{{ $articulo->referencia }}",
                            sistema: "{{ $articulo->sistemas }}",
                            cantidad: "{{ $articulo->pivot->cantidad }}",
                            comentarios: "{{ $articulo->comentarios }}",
                            foto: "{{ $articulo->fotoDescriptiva }}",
                        };
                        // console.log(articulo);

                    });
                }


            });

            // Función para generar una cotización
            $('#generar-cotizacion').click(function() {
                console.log('Generando cotización');
                if ($('.proveedor-checkbox:checked').length == 0) {
                    swal.fire({
                        title: "Error",
                        text: "Debe seleccionar al menos un proveedor",
                        icon: "error",
                    });
                    return false;
                } else {

                    // Inicializamos la variable cotizacion
                    var cotizacion = {
                        articulo: {
                            referencia: $('input[name*="referencia"]').val(),
                            sistema: $('input[name*="sistema"]').val(),
                            cantidad: $('input[name*="cantidad"]').val(),
                            comentarios: $('textarea[name*="comentarios"]').val(),
                            foto: $('input[name*="foto"]').val(),
                        },
                    };

                    // Obtenemos la lista de proveedores seleccionados
                    var listaProveedoresSeleccionados = $('.proveedor-checkbox:checked').map(
                        function() {
                            return {
                                id: $(this).closest('tr').find('input[name*="id"]').val(),
                                marca: $(this).closest('tr').find('select[name*="marca"]').val(),
                                entrega: $(this).closest('tr').find('select[name*="entrega"]')
                                    .val(),
                                dias: $(this).closest('tr').find('input[name*="dias"]').val(),
                                cantidad: $(this).closest('tr').find('input[name*="cantidad"]')
                                    .val(),
                                peso: $(this).closest('tr').find('input[name*="peso"]').val(),
                                costo: $(this).closest('tr').find('input[name*="costo"]').val(),
                                utilidad: $(this).closest('tr').find('input[name*="utilidad"]')
                                    .val(),
                                precioVenta: $(this).closest('tr').find(
                                    'input[name*="precioVenta"]').val(),
                            };
                        }).get();

                    // Validamos la información de los proveedores
                    listaProveedoresSeleccionados.forEach(function(proveedor) {
                        if (proveedor.entrega === '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe seleccionar el plazo de entrega para el proveedor",
                                icon: "error",
                            });
                            return false;
                        } else if (proveedor.costo === '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe ingresar el costo del artículo para el proveedor",
                                icon: "error",
                            });
                            return false;
                        } else if (proveedor.utilidad === '') {
                            swal.fire({
                                title: "Error",
                                text: "Debe ingresar la utilidad del artículo para el proveedor",
                                icon: "error",
                            });
                            return false;
                        }
                    });

                    // Agregamos los proveedores a la cotización
                    cotizacion.proveedores = listaProveedoresSeleccionados;

                    console.log(cotizacion);
                    // Realizamos la petición Fetch para crear la cotización
                    fetch("{{ route('cotizaciones.store') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            body: new URLSearchParams(cotizacion),
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);
                            if (data.status === 'success') {
                                swal.fire({
                                    title: "Cotización creada",
                                    text: "La cotización se ha creado correctamente",
                                    icon: "success",
                                });
                                // Redireccionar a la página de cotizaciones
                                window.location.href = "{{ route('pedidos.index') }}";
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Ha ocurrido un error al crear la cotización",
                                    icon: "error",
                                });
                            }
                        })
                        .catch(error => {
                            console.log(error);
                            swal.fire({
                                title: "Error",
                                text: "Ha ocurrido un error al crear la cotización",
                                icon: "error",
                            });
                        });
                    




                }
            })

            $('.proveedor-checkbox').change(function() {
                // Encuentra la fila padre (tr) de este checkbox
                var fila = $(this).closest('tr');

                // Si el checkbox está seleccionado, agrega la clase "fila-seleccionada"; de lo contrario, quítala.
                if ($(this).is(':checked')) {
                    fila.addClass('table-success');
                } else {
                    fila.removeClass('table-success');
                }
            });
        });
    </script>
@endsection
