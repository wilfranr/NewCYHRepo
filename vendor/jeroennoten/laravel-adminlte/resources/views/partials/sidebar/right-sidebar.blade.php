<aside class="control-sidebar control-sidebar-{{ config('adminlte.right_sidebar_theme') }}">
    @yield('right-sidebar')
    <!-- Aquí puedes agregar tus elementos personalizados del sidebar derecho -->
    {{-- opciones si es superadmin --}}

    <body class="{{ $darkMode ? 'dark-mode' : '' }}">
        <div class="container">
            <h5><b>{{ Auth::user()->name }}</b></h5>
            <small>{{ Auth::user()->role }}</small>
            @if (Auth::user()->hasRole('superadmin'))
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i> Administrar Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('empresas.edit',1) }}" class="nav-link">
                            <ion-icon name="business-outline"></ion-icon> Administrar Empresa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i> Estado de ventas
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('home.updateTrm')}}" method="post" id="formTRM">
                        @csrf
                        <label for="trm-input">TRM</label>
                        <input type="number" name="trm" id="trm-input" value="{{ session('trm')}}" class="form-control mb-2">
                        <button type="button" onclick="cambiarTRM()" class="btn btn-outline-warning btn-sm">Cambiar TRM</button>
                        </form>
                    </li>
                </ul>
            @endif
            {{-- opciones si es admin --}}
            @if (Auth::user()->hasRole('admin'))
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i> Administrar Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i> Estado de ventas
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('home.updateTrm')}}" method="post">
                        @csrf
                        <label for="trm-input">TRM</label>
                        <input type="number" name="trm" id="trm-input" value="{{ session('trm')}}" class="form-control mb-2">
                        <button type="button" onclick="cambarTRM()" class="btn btn-outline-warning btn-sm">Cambiar TRM</button>
                        </form>
                    </li>
                </ul>
            @endif
            {{-- opciones si es vendedor --}}
            @if (Auth::user()->hasRole('vendedor'))
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('users.edit', Auth::user()->id) }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i> Editar Perfil
                        </a>
                    </li>
                </ul>
            @endif
            {{-- opciones si es analista de partes --}}
            @if (Auth::user()->hasRole('analista_partes'))
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('users.edit', Auth::user()->id) }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i> Editar Perfil
                        </a>
                    </li>
                </ul>
            @endif
            {{-- opciones si es auxiliar de logísitca --}}
            @if (Auth::user()->hasRole('auxiliar_logistica'))
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('users.edit', Auth::user()->id) }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i> Editar Perfil
                        </a>
                    </li>
                </ul>
            @endif

            <div class="custom-control custom-switch text-alinga">
                <input type="checkbox" class="custom-control-input" id="darkModeSwitch"
                    {{ config('adminlte.dark_mode') ? 'checked' : '' }}>
                <label class="custom-control-label" for="darkModeSwitch">Modo Oscuro</label>
            </div>
            @include('adminlte::partials.navbar.menu-item-logout-link')

            <script>
                document.getElementById('darkModeSwitch').addEventListener('change', function() {
                    let darkModeEnabled = this.checked;
                    setDarkMode(darkModeEnabled);
                });

                function setDarkMode(enabled) {
                    let body = document.body;
                    if (enabled) {
                        body.classList.add('dark-mode');
                    } else {
                        body.classList.remove('dark-mode');
                    }

                    // Guardar la preferencia en la configuración
                    fetch('/set-dark-mode', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            dark_mode: enabled
                        }),
                    });
                }
            </script>
        </div>
    </body>


    <!-- Fin de los elementos personalizados del sidebar derecho -->

</aside>
