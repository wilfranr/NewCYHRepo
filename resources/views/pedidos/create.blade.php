@extends('adminlte::page')

@section('content')
    {{-- Info de pedido --}}
    <div class="mt-3 mb-5">
        <h4>
            <span class="badge badge-warning"><i class="fas fa-shopping-cart"></i>Pedido #{{ $ultimoPedido }}</span>
            <small class="float-right">Fecha y hora actual: {{ \Carbon\Carbon::now() }}</small><br>
        </h4>
    </div>
    {{-- Formulario de creación de pedido --}}
    <form action="{{ route('pedidos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            {{-- boton para buscar cliente --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalClientes"><i
                    class="fa fa-search" aria-hidden="true"></i>
                Buscar cliente
            </button>
            {{-- dirigir a crear tercero --}}
            <a href="{{ route('terceros.create') }}" class="btn btn-outline-primary" target="blank"><i
                    class="fas fa-plus"></i>Agregar cliente</a>
        </div>

        <!-- info cliente -->
        <div id="info-cliente">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    Datos del cliente
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-3">
                            <p>Cliente</p>
                            <input type="hidden" name="tercero_id" id="tercero_id" value="">
                            <input type="hidden" name="pedido_id" value="">
                            <input type="hidden" name="estado" id="estado" value="Nuevo">

                            <h2 class="lead"><b><a id="link_cliente" href="" target="_blank"><strong
                                            id="nombre_cliente"></strong></a></b></h2>
                            <p class="text-muted text-sm">
                                <b>
                                    <i class="fas fa-lg fa-id-card"></i> <span id="tipo_documento"></span>
                                </b><span id="documento"></span>-<span id="dv"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span><i class="fas fa-lg fa-building"></i> Dirección:</span>
                                </b> <span id="direccion_cliente"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span class=""><i class="fa fa-phone" aria-hidden="true"></i>
                                        Teléfono:</span>
                                </b><span id="telefono"></span>
                            </p>
                            <p class="text-muted text-sm">
                                <b>
                                    <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                                </b><span id="email"></span>
                            </p>
                        </div>
                        <div class="col-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Contactos del cliente</p>

                                {{-- Boton modal para crear maquina --}}
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#modalContacto"><i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="form-group">
                                <div class="d-flex align-items-center">
                                    <select name="contactoTercero" id="contactoTercero" class="form-control">
                                        <option value="">Seleccione</option>
                                        <!-- Otras opciones del select aquí -->
                                    </select>
                                </div>
                            </div>
                            <div id="divContactoTercero" class="ml-2">
                                <p class="text-muted text-sm">
                                    <b>
                                        <i class="fab fa-2x fa-whatsapp"></i>
                                        <span class="">Teléfono:</span>
                                    </b>
                                    <a href="" id="wp_contacto" target="_blank">
                                        <span id="contacto_telefono"></span>
                                    </a>
                                </p>
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-envelope"></i> Email:</span>
                                    </b>
                                    <a href="" id="email-contacto">
                                        <span id="email_contacto"></span>
                                    </a>
                                </p>
                                <p class="text-muted text-sm">
                                    <b>
                                        <span class=""><i class="fa fa-lg fa-briefcase"></i>
                                            Cargo:</span>
                                    </b><span id="cargo_contacto"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Máquinas del cliente</p>

                                {{-- Boton modal para crear maquina --}}
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                    data-target="#modalMaquinas"><i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div>
                                {{-- maquina --}}
                                <select name="maquina_id" id="maquina_id" class="select2">
                                    @foreach ($maquinas as $id => $maquina)
                                        <option value="{{ $id }}">{{ $maquina->tipo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bloque de datos del cliente --}}
        <div class="row">
            {{-- Bloque izquierdo --}}
            <div class="col-md-6">

                <div class="form-group">
                    {{-- mostrar cliente seleccionado --}}
                    <div class="form-group">
                        <label for="tercero_id">Cliente</label>
                        <input type="hidden" name="tercero_id" id="tercero_id" value="" required>
                        <input type="text" class="form-control" id="cliente_nombre" value="" readonly required>
                        <input for="estado" type="hidden" name="estado" value="Nuevo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="" readonly>
                </div>

            </div>


            {{-- Bloque derecho --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numero_documento">No. Documento</label>
                    <input type="text" name="numero_documento" id="numero_documento" class="form-control" readonly
                        required>
                    <input type="hidden" name="puntos" value="">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <div class="d-flex align-items-center">
                        <input type="text" name="telefono" id="telefono" class="form-control" value=""
                            readonly>
                        <a href="" id="wp_cliente" target="_blank" class="ml-2"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>


                <div class="form-group">
                    <label for="contactoTercero">Contacto</label>
                    <div class="d-flex align-items-center">
                        <select name="contactoTercero" id="contactoTercero" class="form-control">
                            <option value="">Seleccione</option>
                            <!-- Otras opciones del select aquí -->
                        </select>
                        <div id="divContactoTercero" class="ml-2">
                            <a href="" id="wp_contacto" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Detalle --}}
        <div class="row" id="div-detalle">
            <div class="form-group mt-3">
                <button class="btn btn-outline-primary mb-5" id="boton-agregar-articulo" type="button">
                    <i class="fas fa-plus"></i>
                    Agregar artículo
                </button>
            </div>
        </div>
        {{-- tabla articulos --}}
        <div id="articulos">
            <input type="hidden" name="articulos-temporales" id="articulos-temporales">
            {{-- tabla --}}
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Referencia</th>
                            <th>Sistema</th>
                            <th>Comentarios</th>
                            <th>Cantidad</th>
                            <th>Fotos</th>
                            <th>Agregar otro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="referencia" id="referencia" class="form-control select2">
                                    <option value="">Ninguno</option>
                                    @foreach ($articulos as $id => $articulo)
                                        <option value="{{ $articulo->referencia }}">{{ $articulo->definicion }}
                                            --{{ $articulo->referencia }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="sistema" class="form-control select2" id="sistema">
                                    <option value="">Ninguno</option>
                                    @foreach ($sistemas as $id => $sistema)
                                        <option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <textarea name="comentarios" id="comentarios" cols="20" rows="5" class="form-control"
                                    placeholder="Ingrese cualquier información relevante del artículo. Ej. Nombre, descripción, especificaciones, etc"></textarea>
                            </td>
                            <td>
                                <input type="number" name="cantidad" class="form-control" id="cantidad"
                                    value="1" required>
                            </td>
                            <td>
                                <input type="file" name="fotos[]" multiple class="form-control" id="fotos">
                            </td>
                            <td>
                                <button class="btn btn-outline-primary" id="boton-agregar-articulo" type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            {{-- comentarios del pedido --}}
            <div id="comentariosPedido">
                <label for="comentario">Comentarios del pedido</label>
                <textarea name="comentario" id="comentario" cols="20" rows="5" class="form-control"></textarea>

                <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                    Crear pedido</button>
            </div>
    </form>

    {{-- Modal de clientes --}}
    <div class="modal fade" id="modalClientes" tabindex="-1" aria-labelledby="modalClientesLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalClientesLabel">Buscar cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="mb-3" name="search" id="search" class="form-control"
                        placeholder="Buscar">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo Documento</th>
                                <th>No. Documento</th>
                                <th>Ciudad</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th><i class="fa fa-check"></i>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Terceros as $tercero)
                                <tr>
                                    <td>{{ $tercero->id }}</td>
                                    <td>{{ $tercero->nombre }}</td>
                                    <td>{{ $tercero->tipo_documento }}</td>
                                    <td>{{ $tercero->numero_documento }}</td>
                                    <td>{{ $tercero->ciudad }}</td>
                                    <td>{{ $tercero->telefono }}</td>
                                    <td>{{ $tercero->email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary seleccionar-cliente"
                                            data-id="{{ $tercero->id }}" data-nombre="{{ $tercero->nombre }}"
                                            data-tipo_documento="{{ $tercero->tipo_documento }}"
                                            data-identificacion="{{ $tercero->numero_documento }}"
                                            data-direccion="{{ $tercero->direccion }}"
                                            data-telefono="{{ $tercero->telefono }}" data-email="{{ $tercero->email }}"
                                            data-dv="{{ $tercero->dv }}" data-dismiss="modal"
                                            data-bs-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal crear máquina --}}
    <div class="modal fade" id="modalMaquinas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear máquina para <span id="tercero-nombre"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('pedidos.crearMaquina') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" id="tercero_id_maquina" name="tercero_id_maquina">

                                <div class="form-group row">
                                    <label for="tipoMaquina"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Tipo de máquina') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="tipo_maquina" name="tipo_maquina">
                                            <option value="">Seleccione un tipo de máquina</option>
                                            @foreach ($tipo_maquina as $t)
                                                <option value="{{ $t->nombre }}">{{ $t->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Marca Fabricante') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="marca" name="marca" required>
                                            <option value="">Seleccione una marca fabricante</option>
                                            {{-- traer todas las marcas --}}
                                            @foreach ($marcas as $m)
                                                <option value="{{ $m->id }}">{{ $m->nombre }}</option>
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
                                                <option value="{{ $mo->nombre }}">{{ $mo->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="serie"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="serie" id="serie">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="arreglo"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Arreglo') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="arreglo" id="arreglo">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fotoMaquina"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Foto Maquina') }}</label>
                                    <div class="col-md-6">
                                        {{-- @if ('') --}}
                                        <input type="file" class="form-control" name="fotoMaquina" id="fotoMaquina">
                                        <img id="preview" src="#" alt="Vista previa de la imagen"
                                            style="max-width: 200px; max-height: 200px;">
                                        <button id="borrar-foto2" type="button" style="display: none;"
                                            class="btn btn-outline-danger">X</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fotoId"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Foto ID') }}</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="fotoId" id="fotoId">
                                        <img id="preview2" src="#" alt="Vista previa de la imagen"
                                            style="max-width: 200px; max-height: 200px;">
                                        <button id="borrar-foto" type="button" style="display: none;"
                                            class="btn btn-outline-danger">X</button>

                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal crear contacto --}}
    <div class="modal fade" id="modalContacto">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear contacto para <span id="tercero-nombre2"></span></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('pedidos.crearContacto') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" id="tercero_id_contacto" name="tercero_id_contacto">

                                <div class="form-group">
                                    <label for="nombre">{{ __('Nombre') }}</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="telefono">{{  __('Telefono') }}</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="cargo">{{ __('Cargo') }}</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" required>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        //busqueda dinámica en tabla terceros
        $(document).ready(function() {

            //ocultar div info-cliente
            $('#info-cliente').hide();
            //ocultar botoon de agregar articulo
            $('#boton-agregar-articulo').hide();
            // ocultar div comentarios de pedido
            $('#comentariosPedido').hide();
            //ocultar boton de whatsapp
            $('#wp_contacto').hide();

            // Capturar el evento de clic en el botón "Seleccionar" de la tabla de clientes
            $(document).on('click', '.seleccionar-cliente', function() {
                //mostrar div info-cliente
                $('#info-cliente').show();
                //mostrar div maquina
                $('#maquina').show();
                // Cerramos el modal
                $('#modalClientes').modal('hide');
                // Actualizar los datos del formulario de crear pedido con los datos del cliente seleccionado
                $('#tercero_id').val($(this).data('id'));
                //actualizar el enlace link_cliente y redirigir a terceros.edit
                $('#link_cliente').attr('href', '/terceros/' + $(this).data('id') + '/edit');
                $('#cliente_nombre').val($(this).data('nombre'));
                $('#numero_documento').val($(this).data('identificacion'));
                $('#documento').html($(this).data('identificacion'));
                $('#direccion').val($(this).data('direccion'));
                $('#direccion_cliente').html($(this).data('direccion'));
                $('#telefono').val($(this).data('telefono'));
                $('#telefono').html($(this).data('telefono'));
                $('#wp_cliente').attr('href', 'https://wa.me/+57' + $(this).data('telefono'));
                $('#email').val($(this).data('email'));
                $('#email').html($(this).data('email'));
                //actualizar el campo tercero en el modal maquinas
                $('#tercero_id_maquina').val($(this).data('id'));
                $('#tercero_id_contacto').val($(this).data('id'));
                $('#tercero-nombre').html($(this).data('nombre'));
                $('#tercero-nombre2').html($(this).data('nombre'));
                $('#nombre_cliente').html($(this).data('nombre'));
                $('#tipo_documento').html($(this).data('tipo_documento'));
                $('#dv').html($(this).data('dv'));
                cargarContactos();
                cargarMarcas();
                cargarMaquinas();
                //mostrar boton de agregar articulo
                $('#boton-agregar-articulo').show();
            });

            //funcion para cargar las marcas asociadas al tercero despues de seleccionarlo
            function cargarMarcas() {
                // Obtener el valor del ID del tercero seleccionado
                var tercero_id = $('#tercero_id').val();

                // Realizar una petición AJAX para obtener las marcas del tercero
                $.ajax({
                    url: `/terceros/${tercero_id}/marcas`,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#filtro_marca').empty();
                        $('#filtro_marca').append($('<option>', {
                            value: '',
                            text: 'Todas'
                        }));
                        response.forEach(marca => {
                            $('#filtro_marca').append($('<option>', {
                                value: marca.nombre,
                                text: marca.nombre
                            }));
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            };

            // Cargar maquinas
            function cargarMaquinas() {
                console.log('funcion cargar máquinas');
                var tercero_id = $('#tercero_id').val();
                var filtro_marca = $('#filtro_marca').val(); // Obtener el valor seleccionado en el filtro de marca

                $.ajax({
                    url: `/terceros/${tercero_id}/maquinas`,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#maquina_id').empty();
                        response.forEach(maquina => {
                            $('#maquina_id').append($('<option>', {
                                value: maquina.id,
                                text: maquina.tipo + ' - ' + maquina.modelo +
                                    ' - ' + maquina.serie +
                                    ' - ' + maquina.marca
                            }));
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }



            // Capturar el evento de cambio en el campo de búsqueda de clientes
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#modalClientes tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            //cargar contactos de tercero
            function cargarContactos() {
                // Obtener el valor del ID del tercero seleccionado
                const tercero_id = document.getElementById("tercero_id").value;

                // Hacer una petición Axios al servidor para obtener los contactos del tercero
                axios.get(`/terceros/${tercero_id}/contactos`)
                    .then(response => {
                        document.getElementById("contactoTercero").innerHTML += `
                            
                            `;
                        response.data.forEach(contacto => {
                            // Agregar una opción al select de contactos
                            document.getElementById("contactoTercero").innerHTML += `
                                <option value="${contacto.id}">${contacto.nombre}</option>
                            `;

                            //cambiar telefono de contacto segun seleccione
                            $('#contactoTercero').change(function() {
                                //mostrar botn de whatsapp
                                $('#wp_contacto').show();
                                var contacto_id = $(this).val();
                                console.log(contacto_id);
                                // Buscar el contacto en la lista de contactos
                                var contactoEncontrado = response.data.find(function(
                                    contacto) {
                                    return contacto.id == contacto_id;
                                });
                                console.log(contactoEncontrado);
                                if (contactoEncontrado) {
                                    $('#wp_contacto').attr('href', 'https://wa.me/+57' +
                                        contactoEncontrado.telefono);
                                    $('#contacto_telefono').html(contactoEncontrado.telefono);
                                    $('#email_contacto').html(contactoEncontrado.email);
                                    $('#email-contacto').attr('href', 'mailto:' +
                                        contactoEncontrado.email);
                                    $('#cargo_contacto').html(contactoEncontrado.cargo);
                                } else {
                                    console.log('No se encontró el contacto');
                                }
                            });
                        });
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }

            let contadorArticulos = 1;

            $('#boton-agregar-articulo').on('click', function() {
                //mostrar div comentarios de pedido
                $('#comentariosPedido').show();

                $('#articulos').append(`

                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="referencia">Referencia</label>
                                <select name="referencia${contadorArticulos}" id="referencia${contadorArticulos}" class="form-control select2">
                                    <option value="">Ninguno</option>
                                    @foreach ($articulos as $id => $articulo)
                                    <option value="{{ $articulo->referencia }}">{{ $articulo->definicion }}--{{ $articulo->referencia }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sistema">Sistema</label>
                                <select name="sistema${contadorArticulos}" class="form-control select2" id="sistema${contadorArticulos}">
                                    <option value="">Ninguno</option>
                                        @foreach ($sistemas as $id => $sistema)
                                            <option value="{{ $sistema->id }}">{{ $sistema->nombre }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comentarios">Comentarios de artículo</label>
                                <textarea name="comentarios${contadorArticulos}" id="comentarios${contadorArticulos}" cols="20" rows="5" class="form-control" placeholder="Ingrese cualquier información relevante del artículo. Ej. Nombre, descripción, especificaciones, etc"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="cantidad${contadorArticulos}" class="form-control" id="cantidad${contadorArticulos}" value="1" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="foto">Fotos (puede agregar varias)</label>
                                <input type="file" name="fotos${contadorArticulos}[]" multiple class="form-control" id="fotos${contadorArticulos}">
                            </div>
                        </div>
                    </div>
                </hr>
            `);

                $('#articulos-temporales').val(contadorArticulos++);

                // Almacenar los datos de $articulos en una variable JavaScript
                var articulos = {!! json_encode($articulos) !!};
                console.log(articulos);

                // Llenar campos de acuerdo a la referencia seleccionada
                $(`#referencia${contadorArticulos-1}`).change(function() {
                    var referencia = $(this).val();
                    console.log(referencia);

                    // Buscar el artículo en la lista de artículos
                    var articuloEncontrado = articulos.find(function(articulo) {
                        return articulo.referencia === referencia;
                    });

                    console.log(articuloEncontrado);

                    if (articuloEncontrado) {
                        $(`#sistema${contadorArticulos-1}`).val(articuloEncontrado.sistema);
                        $(`#definicion${contadorArticulos-1}`).val(articuloEncontrado.definicion);
                    } else {
                        console.log('No se encontró el artículo');
                    }
                });

            });
            //select2
            $('.form-selectw').select2({
                placeholder: "Seleccione...",
                allowClear: true,
                theme: "bootstrap"
            });
            $('.select2').select2({
                placeholder: "Seleccione...",
                allowClear: true,
                theme: "bootstrap"
            });


        });
        if ($('#cantidad').val() == '') {
            $('#cantidad').val(1);

        }
    </script>
@endsection
