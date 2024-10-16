<?php require_once 'data_municipios\data_provincias.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pueblos</title>
</head>
<body>
    <h1>PUEBLOS DE ESPAÑA</h1>
    <form action="Municipio.php" method="get">
        <label for="pueblo">PROVINCIAS:</label>
        <select name="pueblo" id="pueblo">
            <option selected disabled>Elige una provincia</option>
            <?php 
                foreach ($PROVINCIAS as $id => $value) {
                    printf("<option id=%s>%s</option>", $id, $value);
                }
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>