@extends('adminlte::page')
@section('title', 'Terceros')

@section('content')
    <div class="container-fluid mt-3">

        {{-- <button type="button" class="btn btn-primary mb-2 mt-2" data-toggle="modal" data-target="#modal-crear-tercero">
            <i class="fas fa-plus"></i>
            Agregar tercero
        </button> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title"><i class="fas fa-fw fa-users"></i> Terceros</h3>
                        </div><br>
                        {{-- checkbox para seleccionar si cliente o proveedor --}}
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio"
                                    checked>
                                <label for="customRadio1" class="custom-control-label">Todos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input custom-control-input-warning" type="radio"
                                    id="customRadio2" name="customRadio">
                                <label for="customRadio2" class="custom-control-label">Clientes </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input custom-control-input-success" type="radio"
                                    id="customRadio3" name="customRadio">
                                <label for="customRadio3" class="custom-control-label">Proveedores </label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped" id="terceros">
                            <thead>


                                <tr>
                                    <th>ID</th>
                                    <th>Razón Social</th>
                                    <th>Tipo</th>
                                    <th>Identificacion</th>
                                    <th>Teléfono</th>
                                    <th>Creación</th>
                                    {{-- <th>Acciones</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($terceros as $tercero)
                                    <tr data-tipo="{{ $tercero->tipo }}">
                                        <td><a href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->id }}</a>
                                        </td>
                                        <td><a href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->nombre }}</a>
                                        </td>
                                        <td><a href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->tipo }}</a>
                                        </td>
                                        <td><a
                                                href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->numero_documento }}</a>
                                        </td>
                                        <td>
                                            {{ $tercero->telefono }}
                                            <a href="https://wa.me/{{ $tercero->telefono }}" target="_blank"><i
                                                    class="fab fa-whatsapp"></i></a>
                                        </td>
                                        <td><a
                                                href="{{ route('terceros.edit', $tercero->id) }}">{{ $tercero->created_at }}</a>
                                        </td>

                                        {{-- <td>
                                            <a href="{{ route('terceros.show', $tercero->id) }}"
                                                class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>

                                            <button type="button" class="btn btn-default" data-toggle="modal"
                                                data-target="#modal-editar-tercero">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <form action="{{ route('terceros.destroy', $tercero->id) }}" method="POST"
                                                style="display: inline">
                                                @csrf

                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger delete"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>

                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- /.modal -->
        </div>

        {{-- Modal crear Tercero --}}
        <div class="modal fade" id="modal-crear-tercero">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Crear Tercero</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- card formulario -->
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('terceros.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="tipo">Tipo Tercero</label>
                                            <select name="tipoTercero" id="tipoTercero" class="form-control">
                                                <option value="">-- Seleccione un tipo --</option>
                                                <option value="Cliente" {{ old('tipo') == 'Cliente' ? 'selected' : '' }}>
                                                    Cliente</option>
                                                <option value="Proveedor"
                                                    {{ old('tipo') == 'Proveedor' ? 'selected' : '' }}>Proveedor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="numero_documento">No. Documento</label>
                                                <input type="text" name="numero_documento" id="numero_documento"
                                                    class="form-control" value="{{ old('numero_documento') }}">
                                                <input type="hidden" name="puntos" value="{{ old('puntos') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre">Razon social</label>
                                                <input type="text" name="nombre" id="nombre" class="form-control"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="direccion">Dirección</label>
                                                <input type="text" name="direccion" id="direccion" class="form-control"
                                                    value="{{ old('direccion') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="pais_id">País</label>
                                                <select name="pais_id" id="pais_id" class="form-control" required>
                                                    <option value="">Seleccione un país</option>
                                                    @foreach ($paises as $pais)
                                                        <option value="{{ $pais->PaisCodigo }}">{{ $pais->PaisNombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="email-facturacion">Email de Facturación</label>
                                                <input type="email" name="email_facturacion" id="email-facturacion"
                                                    class="form-control" value="{{ old('email_facturacion') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="rut">Rut</label>
                                                <input type="file" name="rut" id="rut" class="form-control"
                                                    value="{{ old('rut') }}">

                                            </div>
                                            <div class="form-group maquinas">
                                                <label for="maquinas">Máquinas:</label>

                                                <select class="select2" name="maquinas[]" multiple="multiple"
                                                    data-placeholder="Seleccione..." style="width: 100%;">
                                                    @foreach ($maquinas as $maquina)
                                                        <option value="{{ $maquina['id'] }}">{{ $maquina['text'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group rangoProductos" id="rangoProductos">
                                                <label for="rangoProductos">Rango de productos</label>
                                                <select class="select2" name="marca[]" multiple="multiple"
                                                    style="width: 100%;">
                                                    <optgroup label="Fabricantes">
                                                        @foreach ($marcas as $marca)
                                                            <option value="{{ $marca->id }}">{{ $marca->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                    <optgroup label="Sistemas">
                                                        @foreach ($sistemas as $sistema)
                                                            <option value="{{ $sistema->id }}">{{ $sistema->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tipo_documento">Tipo</label>
                                                <select name="tipo_documento" id="tipo_documento" class="form-control"
                                                    required>
                                                    <option value="">-- Seleccione un tipo de documento --</option>
                                                    <option value="cedula"
                                                        {{ old('tipo_documento') == 'cedula' ? 'selected' : '' }}>Cédula de
                                                        ciudadanía</option>
                                                    <option value="nit"
                                                        {{ old('tipo_documento') == 'nit' ? 'selected' : '' }}>Nit</option>
                                                    <option value="ce"
                                                        {{ old('tipo_documento') == 'ce' ? 'selected' : '' }}>Cédula de
                                                        extranjería</option>
                                                </select>
                                                <div class="form-group" id="dv-field" style="display:none">
                                                    <label for="dv">DV</label>
                                                    <input type="text" class="form-control" id="dv"
                                                        name="dv"
                                                        placeholder="Ingrese el digito de verificación del Nit"
                                                        value="{{ old('dv') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Teléfono</label>
                                                <input type="text" name="telefono" id="telefono"
                                                    class="form-control" value="{{ old('telefono') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="ciudad">Ciudad</label>

                                                <select name="ciudad" id="ciudad" class="form-control select2"
                                                    required style="width: 100%">
                                                    <option value="">Seleccione una ciudad</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="sitioWeb">Sitio Web</label>
                                                <input type="text" name="sitioWeb" id="sitioWeb"
                                                    class="form-control" value="{{ old('sitioWeb') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="certificacion_bancaria">Certificación bancaria</label>
                                                <input type="file" name="certificacion_bancaria"
                                                    id="certificacion_bancaria" class="form-control"
                                                    value="{{ old('certificacion_bancaria') }}">
                                            </div>
                                            <div class="border border-warning mt-4 p-3">
                                                <hr>
                                                <h2>Contactos de tercero</h2>
                                                <div id="contactos">
                                                    <input type="hidden" name="contadorContactos" value="3">

                                                </div>

                                                <button type="button" class="btn btn-success"
                                                    id="agregar-contacto">Agregar contacto</button>
                                                <hr>
                                            </div>

                                        </div>
                                    </div>


                                    {{-- <div class="form-group border border-warning mt-4 p-3" id="rango">
                                        <label for="rango">Rango de productos</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Marca</h4>
                                                <ul>
                                                    @foreach ($marcas as $marca)
                                                        <li>
                                                            <input type="checkbox" name="marca[]"
                                                                value="{{ $marca->id }}"
                                                                id="marca{{ $marca->id }}">
                                                            <label
                                                                for="marca{{ $marca->id }}">{{ $marca->nombre }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Sistemas</h4>
                                                <ul>
                                                    @foreach ($sistemas as $sistema)
                                                        <li>
                                                            <input type="checkbox" name="sistema[]"
                                                                value="{{ $sistema->id }}"
                                                                id="sistema{{ $sistema->id }}">
                                                            <label
                                                                for="sistema{{ $sistema->id }}">{{ $sistema->nombre }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                        </div>
                                    </div> --}}

                                    <button type="submit" class="btn btn-primary mt-3">Crear tercero</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
@endsection
@section('js')
    <script>
        const paisSelect = document.getElementById('pais_id');
        paisSelect.addEventListener('change', function() {
            const paisCodigo = this.value;
            fetch('/ciudades/' + paisCodigo)
                .then(response => response.json())
                .then(data => {
                    const ciudadSelect = document.getElementById('ciudad');

                    ciudadSelect.innerHTML = '';
                    data.ciudades.forEach(ciudad => {
                        const option = document.createElement('option');
                        option.value = ciudad.CiudadID;
                        option.text = ciudad.CiudadNombre;
                        ciudadSelect.appendChild(option);

                    });
                });
        });

        $(function() {
            // Inicializar DataTables
            var table = $('#terceros').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "scrollY": true,
                "scrollY": "450px",
                "scrollCollapse": true,
                "paging": false,
            });

            // Escuchar el evento change de los radio buttons
            $('input[name="customRadio"]').change(function() {
                var tipoSeleccionado = $(this).attr('id');
                if (tipoSeleccionado === 'customRadio1') {
                    // Mostrar todas las filas
                    table.rows().nodes().to$().show();
                } else {
                    // Filtrar y mostrar solo las filas correspondientes al tipo seleccionado
                    var tipoFiltro = tipoSeleccionado === 'customRadio2' ? 'Cliente' : 'Proveedor';
                    table.rows().nodes().to$().hide();
                    table.rows('[data-tipo="' + tipoFiltro + '"]').nodes().to$().show();
                }
            });
        });
        $(document).ready(function() {
            $('.delete').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, bórralo'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).parent().submit();
                        //tiempo de espera para que se ejecute el submit
                        setTimeout(function() {
                            Swal.fire(
                                '¡Eliminado!',
                                'El registro ha sido eliminado.',
                                'success'
                            )
                        }, 500);
                    }
                })
            });

            // Obtener el elemento select
            const tipoDocumentoSelect = document.getElementById('tipo_documento');
            // Obtener el campo dv
            const dvField = document.getElementById('dv-field');
            //Agregar evento onchange al select
            tipoDocumentoSelect.addEventListener('change', function() {
                // Si la opción seleccionada es NIT, mostrar el campo dv
                dvField.style.display = tipoDocumentoSelect.value === 'nit' ? 'block' : 'none';
            });


            let contadorContactos = 1;

            $('#agregar-contacto').on('click', function() {
                $('#contactos').append(`
                        <hr>
                        <div class="form-group">
                            <label for="nombre_contacto_${contadorContactos}">Nombre:</label>
                            <input type="text" name="nombre_contacto_${contadorContactos}" id="nombre_contacto_${contadorContactos}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono_contacto_${contadorContactos}">Teléfono:</label>
                            <input type="text" name="telefono_contacto_${contadorContactos}" id="telefono_contacto_${contadorContactos}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email_contacto_${contadorContactos}">Correo electrónico:</label>
                            <input type="email" name="email_contacto_${contadorContactos}" id="email_contacto_${contadorContactos}" class="form-control">
                        </div>
                        </hr>

                    `);

                contadorContactos++;
            });
            //select2
            $('.select2').select2({
                placeholder: "Seleccione...",
                allowClear: true,
                theme: "bootstrap"
            });
            //si seleccione tipo tercero cliente, mostrar div #maquina
            $('.maquinas').hide();
            $('#rangoProductos').hide();
            $('#tipoTercero').on('change', function() {
                console.log(this.value);
                if (this.value == 'Cliente') {
                    $('.maquinas').show();
                    $('#rangoProductos').hide();
                } else {
                    $('.maquinas').hide();
                    $('#rangoProductos').show();
                }
            });
        });
    </script>
@endsection
