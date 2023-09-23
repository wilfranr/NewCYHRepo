@extends('adminlte::page')
@section('content')
    <h1>
        @auth
            Aca va a ir el contenido de la pagina principal
            @if (auth()->user()->hasRole('admin') ||
                    auth()->user()->hasRole('superadmin'))
                @foreach ($trm as $t)
                @endforeach

                 <!-- Este es un formulario web que se enviará al endpoint especificado por la ruta 'home.updateTrm' en Laravel. -->

                <form action="{{ route('home.updateTrm') }}" method="post" id="trm-form">
                    {{-- genera un token csrf --}}
                    @csrf
                    <input type="hidden" name="trm" id="trm-input"> <!-- Agrega un ID al campo oculto -->

                </form>
               
                @endif
                @else
                Bienvenido Invitado!
                <a href="login">Iniciar sesión</a>
                @endauth
    </h1>
@endsection
@section('js')
    @if (auth()->user()->hasRole('admin') ||
            auth()->user()->hasRole('superadmin'))
        @if (session('show_trm_request'))
            <script>
                $(document).ready(function() {
                    // Almacenar una referencia al formulario
                    var form = $('#trm-form');

                    Swal.fire({
                        title: 'Bienvenido {{ auth()->user()->name }}',
                        text: 'Por favor, ingrese la nueva TRM',
                        input: 'number',
                        inputValue: {{ $trm->trm }},
                        showCancelButton: true,
                        confirmButtonText: 'Cambiar',
                        cancelButtonText: 'Cancelar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Obtener el valor de la TRM ingresado en el input de Swal
                            var newTrmValue = result.value;

                            // Llenar el valor del campo oculto con la nueva TRM
                            $('#trm-input').val(newTrmValue);

                            // Enviar el formulario de actualización de TRM
                            form.submit();

                            // Tiempo de espera para que se ejecute el submit
                            setTimeout(function() {
                                Swal.fire(
                                    'TRM actualizada!',
                                    'La TRM ha sido actualizada correctamente.',
                                    'success'
                                )
                            }, 1000);
                        }
                    });
                });
            </script>
        @endif
    @endif
@endsection
