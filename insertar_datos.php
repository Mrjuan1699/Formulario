<?php

    $conexion=mysqli_connect('localhost','root', '', 'formulario');

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $sql = "INSERT into datos(Nombre,Apellido) values ('$nombre','$apellido')";

    echo mysqli_query($conexion,$sql);
    
?>