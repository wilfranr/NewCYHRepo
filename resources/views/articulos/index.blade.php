@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
        {{-- <a href="{{ route('articulos.create') }}" class="btn btn-primary mb-2 mt-2"><i class="fa fa-plus"></i> Crear
            Artículo</a> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-fw fa-boxes"></i> Artículos</h3>
                    </div>
                    <div class="card-body">
                        <table id="articulos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fabricante</th>
                                    {{-- <th>Sistema</th> --}}
                                    <th>Definición</th>
                                    <th>Referencia</th>
                                    <th>Cambios</th>
                                    <th>Comentarios</th>
                                    <th>Foto</th>
                                    {{-- <th>Acciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                    <tr>
                                        <td>
                                            <a href="{{ route('articulos.edit', $articulo->id) }}">
                                                {{ $articulo->id }}
                                            </a>
                                        </td>
                                        <td><a
                                                href="{{ route('articulos.edit', $articulo->id) }}">{{ $articulo->marca }}</a>
                                        </td>
                                        {{-- <td>{{ $articulo->sistema }}</td> --}}
                                        <td><a
                                                href="{{ route('articulos.edit', $articulo->id) }}">{{ $articulo->definicion }}</a>
                                        </td>
                                        <td><a
                                                href="{{ route('articulos.edit', $articulo->id) }}">{{ $articulo->referencia }}</a>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach ($articulo->referencias as $referencia)
                                                    <li>{{ $referencia->referencia }}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td><a
                                                href="{{ route('articulos.edit', $articulo->id) }}">{{ $articulo->comentarios }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                target="_blank">
                                                <img src="{{ asset('storage/articulos/' . $articulo->fotoDescriptiva) }}"
                                                    alt="Foto de la lista" width="100px">
                                            </a>
                                        </td>

                                        {{-- <td>
                                            <a href="{{ route('articulos.show', $articulo->id) }}"
                                                class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{ route('articulos.edit', $articulo->id) }}"
                                                class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST"
                                                style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td> --}}
                                    </tr>
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
        $(function() {
            $('#articulos').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "paging": true,
                
            });

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
                    }, 500);
                }
            })
        });
    </script>
@endsection
