<?php require_once 'datos_ciudades.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selecciona un país</h1>
    <form action="cities.php" method="get">
        <select name="country" id="">
        <?php 
        foreach ($PROVINCIAS as $idProvincia => $value) {
            printf("<option>%s</option>", $value);
        }
        ?>
        </select>
        <button type="submit">Buscar ciudades</button>
    </form>
</body>
</html>