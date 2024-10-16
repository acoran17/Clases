<?php require_once 'datos_provincias.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Provincias.php'; 
        $province = $_GET["province"];
    ?>
    <h1>
        La provincia que has elegido es: <?=$province?>
    </h1>
</body>
</html>