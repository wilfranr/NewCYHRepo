@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-fw fa-calculator"></i> Pedidos en costeo</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pedidos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    {{-- <th>Máquina</th> --}}
                                    <th>Comenatarios</th>
                                    {{-- <th>Contacto</th> --}}
                                    <th>Creación</th>
                                    <th>Modificación</th>
                                    {{-- <th>Estado</th> --}}
                                    {{-- <th>Acciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    @if ($pedido->estado == 'Costeo')
                                        <tr>
                                            <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->id }}</a></td>
                                            <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->tercero->nombre }}</a></td>
                                            {{-- <td>
                                                <ul>
                                                    @foreach ($pedido->maquinas as $maquina)
                                                    <a href="{{ route('costeos.costear', $pedido->id) }}">{{ $maquina->tipo }}</a>
                                                    @endforeach
                                                </ul>
                                            </td> --}}
                                            <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->comentario }}</a></td>
                                            {{-- Aca se muestra el nombre del contacto de este teercero --}}
                                            {{-- <td>
                                                @if ($pedido->contacto && $pedido->contacto->nombre)
                                                    <a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->contacto->nombre }}</a>
                                                @endif
                                            </td> --}}
                                            <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->created_at }}</a></td>
                                            <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->updated_at }}</a></td>
                                            {{-- <td><a href="{{ route('costeos.costear', $pedido->id) }}">{{ $pedido->estado }}</a></td> --}}
                                            {{-- <td>
                                                <a href="{{ route('costeos.costear', $pedido->id) }}"
                                                    class="btn btn-outline-primary btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td> --}}
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //filtrar listas por tipo
        $(document).ready(function() {

            $(function() {
                $('#pedidos').DataTable({
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                    },
                    "scrollY": "550px",
                "scrollCollapse": true,
                "paging": false,
                });
            });
        });
    </script>
@endsection
