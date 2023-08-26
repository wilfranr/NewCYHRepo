@extends('adminlte::page')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        {{-- Boton para crear usuarios --}}
        {{-- @if (auth()->user()->hasRole('superadmin')|| auth()->user()->hasRole('admin'))
            <a href="{{ route('users.create') }}" class="btn btn-outline-primary m-1"><i class="fas fa-user-plus"></i>
                Crear usuario</a>
        @endif --}}
        

        <div class="card card-secondary card-tabs bg-light">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-superadmin-tab" data-toggle="pill"
                                href="#custom-tabs-one-superadmin" role="tab" aria-controls="custom-tabs-one-superadmin"
                                aria-selected="true">SuperAdministrador</a>
                        </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-admin-tab" data-toggle="pill"
                            href="#custom-tabs-one-admin" role="tab" aria-controls="custom-tabs-one-admin"
                            aria-selected="false">Administrador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-analistaPartes-tab" data-toggle="pill"
                            href="#custom-tabs-one-analistaPartes" role="tab" aria-controls="custom-tabs-one-analistaPartes"
                            aria-selected="false">Analista de partes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-auxiliarLogistica-tab" data-toggle="pill"
                            href="#custom-tabs-one-auxiliarLogistica" role="tab" aria-controls="custom-tabs-one-auxiliarLogistica"
                            aria-selected="false">Auxiliares de logística</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-vendedor-tab" data-toggle="pill"
                            href="#custom-tabs-one-vendedor" role="tab" aria-controls="custom-tabs-one-vendedor"
                            aria-selected="false">Vendedores</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    
                    <div class="tab-pane fade show active" id="custom-tabs-one-superadmin" role="tabpanel"
                        aria-labelledby="custom-tabs-one-superadmin-tab">
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row">
                                    @foreach ($superadmin as $user)
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">

                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                            <p class="text-muted text-sm"><b>Rol: </b> {{ $user->role }}
                                                            </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-building"></i></span>
                                                                    Dirección:
                                                                    Demo Street 123, Demo City 04312, NJ</li>
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-phone"></i></span> Telefono:
                                                                    {{ $user->phone }}</li>
                                                                    <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-lg fa-envelope"></i></span> Email:
                                                                {{ $user->email }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="{{ asset('storage/users/' . $user->foto) }}"
                                                                class="img-circle elevation-2" alt="User Image"
                                                                width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="#" class="btn btn-sm bg-teal">
                                                            <i class="fas fa-comments"></i>
                                                        </a>
                                                        <a href="{{ route('users.show', $user->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fas fa-user"></i> Ver perfil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="custom-tabs-one-admin" role="tabpanel"
                        aria-labelledby="custom-tabs-one-admin-tab">
                        @foreach ($admin as $user)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">

                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                <p class="text-muted text-sm"><b>Rol: </b> {{ $user->role }} </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span>
                                                        Dirección:
                                                        Demo Street 123, Demo City 04312, NJ</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Telefono:
                                                        {{ $user->phone }}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-envelope"></i></span> Email:
                                                    {{ $user->email }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="{{ asset('storage/users/' . $user->foto) }}"
                                                    class="img-circle elevation-2" alt="User Image" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="{{ route('users.show', $user->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> Ver perfil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-analistaPartes" role="tabpanel"
                        aria-labelledby="custom-tabs-one-analistaPartes-tab">
                        @foreach ($analistaPartes as $user)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">

                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                <p class="text-muted text-sm"><b>Rol: </b> {{ $user->role }} </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span>
                                                        Dirección:
                                                        Demo Street 123, Demo City 04312, NJ</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Telefono:
                                                        {{ $user->phone }}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-envelope"></i></span> Email:
                                                    {{ $user->email }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="{{ asset('storage/users/' . $user->foto) }}"
                                                    class="img-circle elevation-2" alt="User Image" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="{{ route('users.show', $user->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> Ver perfil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-auxiliarLogistica" role="tabpanel"
                        aria-labelledby="custom-tabs-one-auxiliarLogistica-tab">
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row">
                                    @foreach ($auxiliarLogistica as $user)
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">

                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                            <p class="text-muted text-sm"><b>Rol: </b> {{ $user->role }}
                                                            </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-building"></i></span>
                                                                    Dirección:
                                                                    Demo Street 123, Demo City 04312, NJ</li>
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-phone"></i></span> Telefono:
                                                                    {{ $user->phone }}</li>
                                                                    <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-lg fa-envelope"></i></span> Email:
                                                                {{ $user->email }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="{{ asset('storage/users/' . $user->foto) }}"
                                                                class="img-circle elevation-2" alt="User Image"
                                                                width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="#" class="btn btn-sm bg-teal">
                                                            <i class="fas fa-comments"></i>
                                                        </a>
                                                        <a href="{{ route('users.show', $user->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fas fa-user"></i> Ver perfil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-vendedor" role="tabpanel"
                        aria-labelledby="custom-tabs-one-vendedor-tab">
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row">
                                    @foreach ($vendedor as $user)
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">

                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                            <p class="text-muted text-sm"><b>Rol: </b> {{ $user->role }}
                                                            </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-building"></i></span>
                                                                    Dirección:
                                                                    Demo Street 123, Demo City 04312, NJ</li>
                                                                <li class="small"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-phone"></i></span> Telefono:
                                                                    {{ $user->phone }}</li>
                                                                    <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-lg fa-envelope"></i></span> Email:
                                                                {{ $user->email }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="{{ asset('storage/users/' . $user->foto) }}"
                                                                class="img-circle elevation-2" alt="User Image"
                                                                width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="#" class="btn btn-sm bg-teal">
                                                            <i class="fas fa-comments"></i>
                                                        </a>
                                                        <a href="{{ route('users.show', $user->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fas fa-user"></i> Ver perfil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </div>
@endsection

@section('js')
    <script>
        $('.delete').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, bórralo'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                    // Tiempo de espera para que se ejecute el submit
                    setTimeout(function() {
                        Swal.fire(
                            '¡Eliminado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                    }, 500);
                }
            })
            // datatable

            $('#usuarios').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                }
            });
        });
    </script>
@endsection
