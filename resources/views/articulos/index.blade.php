@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
        <div class="form-group">
            <div class="input-group input-group-lg">
                <input type="search" id="search" class="form-control mt-3" placeholder="Buscar artículo">
            </div>
        </div>

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
                                    <th>Definición</th>
                                    <th>Referencias</th>
                                    <th>Comentarios</th>
                                    <th>Foto</th>
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
                                        <td><a
                                                href="{{ route('articulos.edit', $articulo->id) }}">{{ $articulo->definicion }}</a>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script>
        var path = "{{ route('articulos.searchArticle') }}";
        $('#search').typeahead({
            source: function(query, process) {
                console.log('typeahead');
                console.log(query);
                return $.get(path, {
                    query: query
                }, function(data) {
                    console.log(data);
                    return process(data);

                });
            }
        });




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
