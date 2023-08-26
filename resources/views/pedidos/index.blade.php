@extends('adminlte::page')

@section('content')
    
    <div class="container-fluid mt-3">
        {{-- <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-2 mt-2"><i class="fa fa-plus"></i> Nuevo
            Pedido</a> --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"><i class="fas fa-fw fa-shopping-cart"></i> Pedidos</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pedidos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    <th>Máquina</th>
                                    <th>Comentarios</th>
                                    <th>Contacto</th>
                                    <th>Creación</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    @if ($pedido->estado == 'Nuevo')
                                        <tr>
                                            <td>{{ $pedido->id }}</td>
                                            <td>{{ $pedido->tercero->nombre }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($pedido->maquinas as $maquina)
                                                        <li>{{ $maquina->tipo }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{ $pedido->comentario }}</td>
                                            <td>
                                                @if ($pedido->contacto && $pedido->contacto->nombre)
                                                    {{ $pedido->contacto->nombre }}
                                                @endif
                                            </td>
                                            <td>{{ $pedido->created_at }}</td>
                                            <td>{{ $pedido->estado }}</td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-outline-primary btn-sm"
                                                        title="Ver">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-outline-warning btn-sm"
                                                        title="Editar">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST"
                                                        style="display: inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm delete" title="Eliminar">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script>
        $(document).ready(function() {
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
                        }, 1000);
                    }
                })
            });
        });
    </script>
@endsection
