<?php
include_once('connection.php');

$query = "SELECT * FROM articulo";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID Artículo</th><th>Nombre</th><th>Marca</th><th>Sección</th><th>Cantidad</th><th>Editar</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_articulo"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["seccion"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "<td><a href='editar_art.php?id_articulo=" . $row["id_articulo"] . "'>Editar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay artículos en la base de datos";
}

$conn->close();
?>