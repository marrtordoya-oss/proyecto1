 <?php
$direccion="localhost";
$usuario="root";
$contraseña="";
$BD="proyecto"; 

// Conexión
$conexion = new mysqli($direccion, $usuario, $contraseña, $BD);

// Verificar conexión
if ($conexion->connect_error) {
    echo "Hubo un error al conectar a la base de datos";
}

 
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$estado=$_POST["estado"];

// Consulta SQL
$sql = "INSERT INTO tareas (id, nombre, descripcion, estado) 
        VALUES ('$id', '$nombre', '$descripcion', '$estado')";

// Ejecutar
if ($conexion->query($sql) === TRUE) {
    echo "Se registró correctamente";
} else {
    echo $conexion->error;
}
?>