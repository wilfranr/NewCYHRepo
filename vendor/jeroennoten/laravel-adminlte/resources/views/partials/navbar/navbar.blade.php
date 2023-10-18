<nav
    class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }}
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}">

    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('adminlte::partials.navbar.menu-item-left-sidebar-toggler')
        @include('adminlte::partials.navbar.menu-item-back')
        @include('adminlte::partials.navbar.menu-item-new')
        @include('adminlte::partials.navbar.menu-item-save')
        @include('adminlte::partials.navbar.menu-item-edit')
        @include('adminlte::partials.navbar.menu-item-delete')

        {{-- Botones de navegación --}}
        {{-- obtener ruta actual --}}
        <?php $ruta = Route::currentRouteName(); ?>
        @if (isset($previous))

            <li class="nav-item">
                
                <a href="{{ route($ruta, $previous->id) }}" class="nav-link"><ion-icon name="chevron-back-outline"></ion-icon>Ant.</a>
            </li>
        @endif
        @if (isset($next))  
            <li class="nav-item">
                <a href="{{ route($ruta, $next->id) }}" class="nav-link">Sig.<ion-icon name="chevron-forward-outline"></ion-icon></a>
                
            </li>
        @endif
        {{-- Configured left links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Navbar right links --}}
    <ul class="navbar-nav ml-auto">
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- User menu link --}}
        @if (Auth::user())
            @if (config('adminlte.usermenu_enabled'))
                @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
            {{-- @else
                @include('adminlte::partials.navbar.menu-item-logout-link') --}}
            @endif
        @endif

        {{-- Right sidebar toggler link --}}
        @if (config('adminlte.right_sidebar'))
            @include('adminlte::partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>

</nav>
