let val_precio = parseFloat(precio_unitario.value);
let val_unidad = parseFloat(valor_cantidad.value);
let val_iva = parseFloat(valor_iva.value);
if (val_precio != 0 && val_unidad != 0 && val_iva != 0) {
    var presio = parseFloat(precio_unitario.value);
    var unidad = parseFloat(valor_cantidad.value);
    var ivas = parseFloat(valor_iva.value);
    var sub_total = 0;
    var iba = 0;
    var total = 0;
    var num_articulo = 0;
} else {
    var presio = 0;
    var unidad = 0;
    var ivas = 0;
    var sub_total = 0;
    var iba = 0;
    var total = 0;
    var num_articulo = 0;
}

// funcion de actualisacion
function actualizar() {
    resultado_sub_total.innerHTML = sub_total;
    resultado_iva.innerHTML = iba;
    resultado_total.innerHTML = total;
}
// funcion para calcular los precios
function calcular() {
    sub_total = presio * unidad;
    iba = (sub_total * ivas) / 100;
    total = sub_total + iba;
}


// recojida de datos ingresados 
precio_unitario.oninput = function () {
    presio = parseFloat(precio_unitario.value);
    calcular()
    actualizar();
}
valor_cantidad.oninput = function () {
    unidad = parseFloat(valor_cantidad.value);
    calcular()
    actualizar();
}
valor_iva.oninput = function () {
    ivas = parseFloat(valor_iva.value);
    calcular()
    actualizar();
}

cod_articulo.oninput = function () {
    num_articulo = cod_articulo.value;
    resultado_num_factura.innerHTML = num_articulo;

}