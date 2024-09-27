<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio1.php">
        <input type="number" id="categoria">
        <input type="submit" value="enviar">
    </form>
    <?php
        $categoria = $_GET['categoria'];
        $total_productos = sizeof( $arrayProductos );
        for ( $i = 0; $i < $total_productos; $i++ ) {
            $producto = $arrayProductos[$i];
            if ( $producto['categoria'] == $categoria ) {
                echo $productp['nombre'];
            }
        }
    ?>
</body>
</html>

