@extends('adminlte::page')

@section('title', 'CYH | Terceros')

@section('content')
    <div class="content-fluid mt-3">
        <div class="card card-secondary card-tabs bg-light">
            {{-- Tabs --}}
            <div class="card-header p-0 pt-1">
                <p class="text-bold px-2">Crear Tercero</p>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-perfil-tab" data-toggle="pill"
                            href="#custom-tabs-one-perfil" role="tab" aria-controls="custom-tabs-one-perfil"
                            aria-selected="true">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-maquinas-tab" data-toggle="pill"
                            href="#custom-tabs-one-maquinas" role="tab" aria-controls="custom-tabs-one-maquinas"
                            aria-selected="false"><span id="tab-maquina">Máquinas | Marcas | Sistemas</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-contactos-tab" data-toggle="pill"
                            href="#custom-tabs-one-contactos" role="tab" aria-controls="custom-tabs-one-contactos"
                            aria-selected="false">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-archivos-tab" data-toggle="pill"
                            href="#custom-tabs-one-archivos" role="tab" aria-controls="custom-tabs-one-archivos"
                            aria-selected="false">Archivos</a>
                    </li>
                </ul>
            </div>
            {{-- /Tabs --}}
            {{-- Tab content --}}
            <div class="card-body">
                <form method="POST" id="form" action="{{ route('terceros.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        {{-- Perfil de tercero --}}
                        <div class="tab-pane fade show active" id="custom-tabs-one-perfil" role="tabpanel"
                            aria-labelledby="custom-tabs-one-perfil-tab">
                            <div class="card card-solid">
                                <div class="card-body pb-0">

                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nombre">Razon social</label>
                                                        <input type="text" name="nombre" id="nombre"
                                                            class="form-control" value="{{ old('nombre') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="direccion">Dirección</label>
                                                        <input type="text" name="direccion" id="direccion"
                                                            class="form-control" value="{{ old('direccion') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pais_id">País</label>
                                                        <select name="pais_id" id="pais_id" class="form-control" required>
                                                            <option value="">Seleccione un país</option>
                                                            @foreach ($paises as $pais)
                                                                <option value="{{ $pais->PaisCodigo }}">
                                                                    {{ $pais->PaisNombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ciudad">Ciudad</label>

                                                        <select name="ciudad" id="ciudad" class="form-control select2"
                                                            required>
                                                            <option value="">Seleccione una ciudad</option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="indicativo">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control" value="{{ old('email') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telefono">Teléfono</label>
                                                        <input type="text" name="telefono" id="telefono"
                                                            class="form-control" value="{{ old('telefono') }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="tipo">Tipo Tercero</label>
                                                        <select name="tipo" id="tipo" class="form-control"
                                                            required>
                                                            <option value="">-- Seleccione un tipo --</option>
                                                            <option value="Cliente"
                                                                {{ old('tipo') == 'Cliente' ? 'selected' : '' }}>Cliente
                                                            </option>
                                                            <option value="Proveedor"
                                                                {{ old('tipo') == 'Proveedor' ? 'selected' : '' }}>Proveedor
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tipo_documento">Tipo</label>
                                                        <select name="tipo_documento" id="tipo_documento"
                                                            class="form-control" required>
                                                            <option value="">-- Seleccione un tipo de documento --
                                                            </option>
                                                            <option value="CC"
                                                                {{ old('tipo_documento') == 'CC' ? 'selected' : '' }}>
                                                                Cédula de
                                                                ciudadanía</option>
                                                            <option value="NIT"
                                                                {{ old('tipo_documento') == 'NIT' ? 'selected' : '' }}>Nit
                                                            </option>
                                                            <option value="CE"
                                                                {{ old('tipo_documento') == 'CE' ? 'selected' : '' }}>
                                                                Cédula de
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
                                                        <label for="numero_documento">No. Documento</label>
                                                        <input type="text" name="numero_documento"
                                                            id="numero_documento" class="form-control"
                                                            value="{{ old('numero_documento') }}" required>
                                                        @error('numero_documento')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror

                                                        <input type="hidden" name="puntos"
                                                            value="{{ old('puntos') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email-facturacion">Email de Facturación</label>
                                                        <input type="email" name="email_facturacion"
                                                            id="email-facturacion" class="form-control"
                                                            value="{{ old('email_facturacion') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sitioWeb">Sitio Web</label>
                                                        <input type="text" name="sitioWeb" id="sitioWeb"
                                                            class="form-control" value="{{ old('sitioWeb') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Maquinas Marcas Sistemas--}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-maquinas" role="tabpanel"
                            aria-labelledby="custom-tabs-one-admin-tab">
                            <div class="form-group mt-4">
                                {{-- Para Cliente --}}
                                <div class="form-group maquina border border-warning p-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group mt-3">
                                                <label for="maquina_id">Asociar máquinas:</label>
                                                <select name="maquina_id[]" id="maquina_id" class="form-select select2"
                                                    multiple style="width: 200%">

                                                    @foreach ($maquinas as $maquina)
                                                        <option value="{{ $maquina['id'] }}">{{ $maquina['text'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                {{-- Boton modal para crear maquina --}}
                                                <button type="button" class="btn btn-outline-primary mt-2"
                                                    data-toggle="modal" data-target="#modalMaquinas"><i
                                                        class="fa fa-plus" aria-hidden="true"></i>
                                                    Crear Maquina
                                                </button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- Para Proveedor --}}
                                <div class="form-group border border-warning mt-4 p-3" id="rango">
                                    <label for="rango">Rango de productos que maneja el Proveedor</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Marcas</h4>
                                            <ul>
                                                @foreach ($marcas as $marca)
                                                    <li>
                                                        <input type="checkbox" name="marca[]"
                                                            value="{{ $marca->id }}" id="marca{{ $marca->id }}">
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
                                                            value="{{ $sistema->id }}" id="sistema{{ $sistema->id }}">
                                                        <label
                                                            for="sistema{{ $sistema->id }}">{{ $sistema->nombre }}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <div class="no-seleccionado">
                                    <p><ion-icon name="warning-outline"></ion-icon> Debe seleccionar el tipo de tercero</p>
                                </div>
                            </div>
                        </div>

                        {{-- Contactos --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-contactos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-contactos-tab">
                            <div class="border border-warning mt-4 p-3">
                                <hr>
                                <h2>Contactos de tercero</h2>
                                <div id="contactos">
                                    <input type="hidden" name="contadorContactos" value="0">
                                </div>

                                <button type="button" class="btn btn-outline-success" id="agregar-contacto">Agregar
                                    contacto</button>
                                <hr>
                            </div>
                        </div>

                        {{-- Archivos --}}
                        <div class="tab-pane fade show-active" id="custom-tabs-one-archivos" role="tabpanel"
                            aria-labelledby="custom-tabs-one-archivos-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- Rut --}}
                                    <div class="form-group">
                                        <label for="rut">Rut</label>
                                        <input type="file" name="rut" id="rut"
                                            class="form-control form-control-sm" value="{{ old('rut') }}">
                                    </div>
                                    {{-- certificacion bancaria --}}
                                    <div class="form-group">
                                        <label for="certificacion_bancaria">Certificación bancaria</label>
                                        <input type="file" name="certificacion_bancaria" id="certificacion_bancaria"
                                            class="form-control form-control-sm" value="{{ old('certificacion_bancaria') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- camara de comercio --}}
                                    <div class="form-group">
                                        <label for="camara_comercio">Cámara de comercio</label>
                                        <input type="file" name="camara_comercio" id="camara_comercio"
                                            class="form-control form-control-sm" value="{{ old('camara_comercio') }}">
                                    </div>
                                
                                    {{-- cedula representante legal --}}
                                    <div class="form-group">
                                        <label for="cedula_representante_legal">Cédula representante legal</label>
                                        <input type="file" name="cedula_representante_legal"
                                            id="cedula_representante_legal" class="form-control form-control-sm"
                                            value="{{ old('cedula_representante_legal') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <button type="submit" class="btn btn-primary mt-3">Crear tercero</button> --}}
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
        $(document).ready(function() {
            // Obtener el elemento select
            const tipoDocumentoSelect = document.querySelector('#tipo_documento');
            // Obtener el campo dv
            const dvField = document.querySelector('#dv-field');
            //Agregar evento onchange al select
            tipoDocumentoSelect.addEventListener('change', () => {
                // Si la opción seleccionada es NIT, mostrar el campo dv
                dvField.style.display = tipoDocumentoSelect.value === 'NIT' ? 'block' : 'none';
            });


            let contadorContactos = 1;
            $('#agregar-contacto').on('click', function() {
                $('#contactos').append(`
                    <hr>
                    <div class="form-group">
                        <label for="contactos[${contadorContactos}][nombre]">Nombre:</label>
                        <input type="text" name="contactos[${contadorContactos}][nombre]" id="nombre_contacto_${contadorContactos}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contactos[${contadorContactos}][telefono]">Teléfono:</label>
                        <input type="text" name="contactos[${contadorContactos}][telefono]" id="telefono_contacto_${contadorContactos}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contactos[${contadorContactos}][email]">Correo electrónico:</label>
                        <input type="email" name="contactos[${contadorContactos}][email]" id="email_contacto_${contadorContactos}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contactos[${contadorContactos}][cargo]">Cargo:</label>
                        <input type="text" name="contactos[${contadorContactos}][cargo]" id="cargo_contacto_${contadorContactos}" class="form-control">
                    </div>
                    </hr>
                `);

                contadorContactos++; // Incrementar el contador de contactos
                $('input[name="contadorContactos"]').val(
                    contadorContactos); // Actualizar el valor en el campo oculto
            });
        });
        //si seleccione tipo tercero cliente, mostrar div #maquina
        $('.maquina').hide();
        $('#rango').hide();
        const tipoTerceroSelect = document.getElementById('tipo');
        const maquinaDiv = document.getElementById('maquina');
        tipoTerceroSelect.addEventListener('change', function() {
            if (tipoTerceroSelect.value === 'Cliente') {
                $('.maquina').show();
                $('#rango').hide();
                //cambiar el texto del span con id #tab-maquina por "Maquinas"
                $('#tab-maquina').text('Máquinas');
                $('.no-seleccionado').hide();
            } if (tipoTerceroSelect.value === 'Proveedor') {
                $('.maquina').hide();
                $('#rango').show();
                //cambiar el texto del span con id #tab-maquina por "Marca-Sistema"
                $('#tab-maquina').text('Marcas | Sistemas');
                $('.no-seleccionado').hide();
            }
        });
        //select2
        $('.select2').select2({
            placeholder: "Seleccione...",
            allowClear: true,
            theme: "bootstrap"
        });
    </script>
@endsection
