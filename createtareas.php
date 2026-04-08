




<?php
require("proyecto.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];
$sql="INSERT INTO proyecto.tareas (id, nombre, descripcion, estado) VALUES ('$id', '$nombre', '$descripcion', '$estado')";

if($conexion->query($sql)===TRUE){
    echo"Registro exitoso";
}




?>