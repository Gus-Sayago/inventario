<?php
include_once('connection.php');

$id_articulo = $conn->real_escape_string($_POST['id_articulo']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$marca = $conn->real_escape_string($_POST['marca']);
$seccion = $conn->real_escape_string($_POST['seccion']);
$cantidad = $conn->real_escape_string($_POST['cantidad']);

$query = "UPDATE articulo SET nombre='$nombre', marca='$marca', seccion='$seccion', cantidad='$cantidad' WHERE id_articulo='$id_articulo'";

if ($conn->query($query) === TRUE) {
    echo "Artículo editado con éxito";
} else {
    echo "Error editando artículo: " . $conn->error;
}

$conn->close();

// Redirigimos a la lista de articulos
sleep(5);
header("Location: editar.php");
exit;
?>