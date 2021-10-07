$(document).ready(function() {
    $('#btn-enviar').click(function() {
        var datos = $('#formulario_datos').serialize();
        $.ajax({
            type: "POST",
            url: "insertar.php",
            data: datos,
            success: function(j) {
                if (j == 1) {
                    alert("Registro guardado.")
                } else {
                    alert("No se pudo guardar el registro.")
                }
            }
        });

        return false;
    });
});