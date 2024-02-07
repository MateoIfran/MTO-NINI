function cambiarColorFila(selectElement) {
    var status = selectElement.value;
    var fila = selectElement.parentNode.parentNode;

    // Eliminar clases de color anteriores
    fila.classList.remove("operativo");
    fila.classList.remove("mantenimiento");
    fila.classList.remove("fuera-de-servicio");

    // Aplicar clase de color según el status seleccionado
    if (status === "operativo") {
        fila.classList.add("operativo");
    } else if (status === "mantenimiento") {
        fila.classList.add("mantenimiento");
    } else if (status === "fuera-de-servicio") {
        fila.classList.add("fuera-de-servicio");
    }
}