//Sweet Alerts

function error(mensaje_uno, mensaje_dos) {
    Swal.fire({
        title: mensaje_uno,
        text: mensaje_dos,
        icon: "error",
    });
}

function guardado(mensaje_uno, mensaje_dos) {
    Swal.fire({
        title: mensaje_uno,
        text: mensaje_dos,
        icon: "success",
    });
}
function question(mensaje_uno, mensaje_dos) {
    Swal.fire({
        title: mensaje_uno,
        text: mensaje_dos,
        icon: "question",
    });
}
