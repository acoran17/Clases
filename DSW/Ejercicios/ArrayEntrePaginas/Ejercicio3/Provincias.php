<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Resultado.php" method="get">
            <?php
                require_once 'datos_provincias.php';
            ?>

            <?php foreach ($provincias as $p) { ?>
                    <label for="<?=$p?>" ><?=$p?>-></label>
                    <input type="checkbox" name="province[]" id="<?=$p?>" value="<?=$p?>">
            <?php } ?>
            <input type="submit" value="enviar">
        </select>
    </form>
</body>
</html>