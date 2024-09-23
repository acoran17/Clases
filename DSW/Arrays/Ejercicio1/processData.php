<?php require_once('datos_provincias.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Provincia:
        <ul>
            <?php
                $provinciasId = $_POST['provinciasId'];
                foreach($provinciasId as $id) {
                    printf('<li>%s</li>', $provincias[$id]);
                }
            ?>
        </ul>
    </p>
</body>
</html>