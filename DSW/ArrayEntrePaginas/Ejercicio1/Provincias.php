<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Resultado.php" method="get">
        <select name="province" id="">
            <?php
                require_once 'datos_provincias.php';
                foreach ($provincias as $p) {
                    printf("<option>%s</option>", $p);
                }
            ?>
            <input type="submit" value="enviar">
        </select>
    </form>
</body>
</html>