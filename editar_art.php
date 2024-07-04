<?php

include_once('connection.php');

$id_articulo = $_GET['id_articulo'];

$query = "SELECT * FROM articulo WHERE id_articulo='$id_articulo'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
    <form action="update.php" method="post">
           
        <label for='id_articulo'>ID Artículo:</label> 
        
        <input type="text" name="id_articulo" readonly value="<?php echo $row["id_articulo"]; ?>"><br/>
        <label for='nombre'>Nombre:</label> 
        
        <input type="text" name="nombre" value="<?php echo $row["nombre"]; ?>"><br/>
        <label for='marca'>Marca:</label>
        <input type="text" name="marca" value="<?php echo $row["marca"]; ?>"><br/>
        <label for='seccion'>Sección:</label>
        <input type="text" name="seccion" value="<?php echo $row["seccion"]; ?>"><br/>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?php echo $row["cantidad"]; ?>"><br/>
        <input type="submit" value="Editar">
    </form>
    <?php
} else {
    echo "Artículo no encontrado";
}

$conn->close();
?>