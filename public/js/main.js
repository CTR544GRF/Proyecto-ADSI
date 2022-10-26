// le asigno a nav la clase activar

const button = document.querySelector('.btn_menu')
const nav = document.querySelector('.nav')

button.addEventListener('click',()=>{
    nav.classList.toggle('activar')
})


//Sweet Alerts

function error(mensaje_uno,mensaje_dos) {
    Swal.fire({
        title:mensaje_uno,
        text:mensaje_dos,
        icon:'error'
    })
}

function guardado(mensaje_uno,mensaje_dos) {
    Swal.fire({
        title:mensaje_uno,
        text:mensaje_dos,
        icon:'success'
    })
}
function question(mensaje_uno,mensaje_dos) {
    Swal.fire({
        title:mensaje_uno,
        text:mensaje_dos,
        icon:'question'
    })
}