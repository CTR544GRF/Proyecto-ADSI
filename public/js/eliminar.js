$(".eliminar_datos").submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: "¿Estás seguro?",
        text: "No podrás revertir esto.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, bórralo.",
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    });
});
