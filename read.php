<?php
$direccion="localhost";
$usuario="root";
$contraseña="";
$nombreBase="proyecto";

$conexion= new mysqli($direccion,$usuario,$contraseña,$nombreBase);
if($conexion->error){
    echo "hubo un error al conectar la base de datos";
}

$id=S_GET['id'];
$sql="SELECT * FROM tareas WHERE id='$id';
$resultado = $conexion->query(sql);
if(resultado->num-rows>0){
while
?>