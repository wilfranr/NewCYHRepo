@extends('adminlte::page')

@section('content')
    <div class="container-fluid mt-3">
                    {{-- <button type="button" class="btn btn-primary mb-2 mt-2" data-toggle="modal" data-target="#modal-crear-lista-padre">
                <i class="fas fa-plus"></i>
                Crear lista padre
            </button> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-fw fa-tasks"></i> Lsitas Padre</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="listasPadre">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listasPadre as $listaPadre)
                                    <tr>
                                        <td><a href="{{ route('listasPadre.edit', $listaPadre) }}">{{ $listaPadre->nombre }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Modal crear lista --}}
    <div class="modal fade" id="modal-crear">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Lista Padre</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">

                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- Formulario para crear lista --}}
                            <form method="POST" action="{{ route('listasPadre.store') }}">
                                @csrf
    
                                <div class="form-group row">
                                    <label for="nombre"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="nombre" type="text"
                                            class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                            value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
    
                                        @error('nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
@endsection
@section('js')
    <script>
        $(function() {
            $('#listasPadre').DataTable({
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                },
                "scrollY": true,
                "scrollY": "550px",
                "scrollCollapse": true,
                "paging": false,
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
        });
    </script>
@endsection
