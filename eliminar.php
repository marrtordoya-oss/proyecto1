<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('Seguro que quieres eliminarrr?')">
    Eliminar
</a>
    <?php
include("conexion.php");

// Verificar que llega el ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL
    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    // Ejecutar consulta
    if (mysqli_query($conexion, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar";
    }
}
?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "mi_base_datos");
?>

</body>
</html>