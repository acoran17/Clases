<!-- Estamos creado la web de una tienda online, en concreto, el código de un buscador de productos. Nos piden que creemos un script que solucione el problema de filtrado de productos, mostrando solo los productos que ha elegido filtrar el usuario.

La información de los productos la tenemos en un Array multidimensional llamado $arrayProductos, en posiciones consecutivas (0, 1, 2, 3) y en cada una un array con dos datos, la categoría del producto y el nombre del producto.

En la variable $categoria recibiremos el código de la categoria de productos a mostrar. -->
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
                echo $producto['nombre'];
            }
        }
    ?>
</body>
</html>

