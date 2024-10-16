<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factura</h10>
    <table>
        <tr>
            <th>Articulo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <?php 
            //llamo al archivo donde tengo los detalles de la factura
            require_once 'Detalles.php';
            $result = 0;
        ?>
        <?php 
            //creo un foreach iterando en $bill y interactuando con el array de su interior para mostrar cada uno de sus valores
            foreach ($bill as $product) {
        ?>
            <tr>
                <td><?=$product[0]?></td>
                <td><?=$product[1]?>$</td>
                <td><?=$product[2]?></td>
                <td><?=$product[1] * $product[2]?>$</td>
            </tr>
        <?php 
            //voy sumando al resultado la suma del total de casa producto
            $result += $product[1] * $product[2];
        } 
        ?>
        <tr>
            <th>Total</th>
            <!-- muestro el resultado total de todos los productos -->
            <th><?= $result ?>$</th>
        </tr>
    </table>
</body>
</html>