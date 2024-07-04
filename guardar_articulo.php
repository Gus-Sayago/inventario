<?php

//conexion a base de datos

include_once('connection.php');

//recibimos los datos del formulario


$nombre_producto = $_POST['nombre'];
$marca = $_POST['marca'];
$seccion = $_POST['seccion'];
$cantidad = $_POST['cantidad'];

//consulta sql para dar de alta en bd
$alta ="INSERT INTO articulo(nombre,marca,seccion,cantidad) VALUES ('$nombre_producto','$marca','$seccion','$cantidad')";

//ejecutamos la consulta de alta
$query = mysqli_query($conn, $alta);

if($query){
    echo("Alta realizada correctamente.");
    sleep(3); // esperamos 3 segundos 
    header("Location:index.html"); //redirigimos al form
    exit;
}
else{
    echo("Error al dar de alta en la base de datos");
}
?>