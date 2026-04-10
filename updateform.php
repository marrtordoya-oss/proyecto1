<?php
     $direccion="localhost";
     $usuario="root";
     $contraseña="";
     $nombreBaseDeDatos="proyecto";

    $conexion = new mysqli($direccion, $usuario, $contraseña, $nombreBaseDeDatos);
    if($conexion->connect_error){
        echo "hubo un errror al conectar a la base de datos";
    }