<?php 
error_reporting(E_ALL);
ini_set("display_errors",1);

include('C:\xampp3\htdocs\parcialMaroseck\includes\ym_conexion.php');
conectar();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/ym_style.css">
    <title>parcialMaroseck Productos</title>
</head>
<body>
    <header class="ym_headersecciones">
        <h1> P A N D O R A </h1>
        <nav>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="modulos/ym_contacto">CONTACTOS</a></li>
                <li><a href="modulos/ym_productos.php">PRODUCTOS</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Lista de Productos</h1>
        <ul id="ym_product-list">
            
            <?php
                $conn = mysqli_connect("localhost", "", "", "parcialmaroseck");
                
                if (!$conn) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                
                $sql = "SELECT nombre, imagen, precio FROM productos LIMIT 3";
                $result = mysqli_query($conn, $sql);

                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<strong>Nombre:</strong> " . $row['nombre'] . "<br>";
                    echo "<strong>Precio:</strong> $" . $row['precio'] . "<br>";
                    echo "<img src=../img/ym_producto>" . $row['imagen'] . "' alt='imagen del producto'><br>";
                    echo "</li>";
                }
            ?>
        </ul>

    
    </main>
    

</body>
</html>
