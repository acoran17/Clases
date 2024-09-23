<?php require_once('datos_provincias.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processData.php?" method="post">
        <p>
            <label for="provincia">¿En provincia naciste?</label>
            <select name="provinciasId[]" id="provincia" multiple>
                <?php for ($i=0; $i < count($provincias); $i++) { 
                    printf('<option value="%d">%s</option>', $i, $provincias[$i]);    
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
</body>
</html>