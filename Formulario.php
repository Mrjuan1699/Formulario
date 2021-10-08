<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="form.css">
    <script src="jquery.min.js"></script>
    <script src="form.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>

    <section class="formulario">
        <form action="insertar_datos.php" method="POST" id="formulario_datos">
            <h3>Formulario de registro</h3>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
            <input type="text" class="form-control mt-3" name="apellido" placeholder="Ingresa tu apellido">
            <input type="submit" class="btn-enviar" id="btn-enviar" value="Enviar">
        </form>
    </section>
</body>

</html>