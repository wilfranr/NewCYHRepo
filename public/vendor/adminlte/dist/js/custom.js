//const { set } = require("lodash");
console.log('custom.js');
//ocultar botones
document.getElementById('btnNuevo').style.display = 'none';
document.getElementById('btnNuevo').style.display = 'none';
document.getElementById('btnEditar').style.display = 'none';
document.getElementById('btnEliminar').style.display = 'none';
document.getElementById('btnGuardar').style.display = 'none';

var ruta = window.location.href;


if (ruta == 'http://localhost:8000/listas' || ruta == 'http://localhost:8000/listasPadre' || 'http://localhost:8000/marcas') {
    document.getElementById('btnNuevo').style.display = 'block';

    //Abrir modal data-toggle="modal" data-target="#modal-crear"
    document.getElementById('btnNuevo').setAttribute('data-toggle', 'modal');
    document.getElementById('btnNuevo').setAttribute('data-target', '#modal-crear');
}
if (ruta == 'http://localhost:8000/articulos' || ruta == 'http://localhost:8000/pedidos' || ruta == 'http://localhost:8000/maquinas' || ruta == 'http://localhost:8000/terceros') {
    console.log('estoy en articulos');
    document.getElementById('btnNuevo').style.display = 'block';
    //función de boton nuevo para que redirija a la vista de crear
    document.getElementById('btnNuevo').setAttribute('onclick', 'nuevo()');
    
}
if (ruta == 'http://localhost:8000/users') {
    document.getElementById('btnNuevo').style.display = 'block';
    //función de boton nuevo para que redirija a la vista de registro de usuario
    document.getElementById('btnNuevo').setAttribute('onclick', 'registrar()');
}
//si estoy en la ruta de edit mostrar boton guardar
if (ruta.includes('edit')) {
    document.getElementById('btnNuevo').style.display = 'block';
    document.getElementById('btnNuevo').setAttribute('onclick', 'nuevoDesdeEdit()');
    document.getElementById('btnGuardar').style.display = 'block';
    document.getElementById('btnEliminar').style.display = 'block';
}

// si estoy en la ruta de create mostrar boton guardar
if (ruta.includes('create')) {
    document.getElementById('btnGuardar').style.display = 'block';
}

//funcion de boton que redirija a la vista de registro de usuario
function registrar() {
    window.location.href = 'http://localhost:8000/register';
}

//función de boton que redirija a la vista de crear
function nuevo() {
    console.log('nuevo');
    window.location.href = ruta + '/create';
}

//función de boton que redirija a la vista de crear desde la vista edit
function nuevoDesdeEdit() {
    // Extraer el número del id del tercero utilizando una expresión regular
    var id = ruta.match(/\/(\d+)\/edit$/)[1];
    
    // Construir la nueva ruta sin el número del id
    var nuevaRuta = ruta.replace(new RegExp(`/${id}/edit$`), '/create');
    
    // Redirigir a la nueva ruta
    window.location.href = nuevaRuta;
}

//funcion de boton que redirja hacia la pagina anterior
function atras() {
    window.history.back();
}

//funcion para guardar datos
function guardarDatos() {
    console.log('guardar datos');
    form = document.getElementById('form');
    form.submit();
}

//funcion para eliminar datos
function eliminarDatos() {
    //swal
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, bórralo'
    }).then((result) => {
        if (result.isConfirmed) {
            form = document.getElementById('deleteForm');
            form.submit();
            //tiempo de espera para que se ejecute el submit
            setTimeout(function () {
                Swal.fire(
                    '¡Eliminado!',
                    'El registro ha sido eliminado.',
                    'success'
                )
            }, 500);
        }
    })
}
$(function () {
    // Activar los tooltips
    $('[data-toggle="tooltip"]').tooltip();
});
// Función para cambiar TRM
function cambiarTRM() {

    // Mostrar alerta swal
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'TRM actualizada',
        showConfirmButton: false,
        timer: 800
    });

    setTimeout(function () {
        form = document.getElementById('formTRM');
        // Enviar el formulario
        form.submit();
    }, 1000);
}

