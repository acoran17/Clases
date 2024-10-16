<?php require_once 'data_municipios\data_provincias.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Municipio.php" method="get">
        <h1>PUEBLOS DE ESPAÑA</h1>
        <!-- tambien se podria usar !empty($_GET['pueblo']) para que no modifiquen la url -->
        <?php 
            if(isset($_GET['province'])){
            $idProvince = $_GET['province'];    
            printf("<p><h2>Provincia de %s</h2></p>", $PROVINCIAS[$idProvince]);
            require_once 'data_municipios\data_municipios.php';
            $towns = $MUNICIPIOS[$idProvince];
        ?> 
            
                <label for="town">MUNICIPIOS:</label>
                <select name="town" id="town">
                    <option selected disabled>Elige un municipio</option>
                    <?php 
                        foreach ($towns as $id => $value) {
                            printf("<option value=%s>%s</option>", $id, $value);
                        }
                    ?>
                </select>
                <input type="submit" value="enviar">
        <?php
        }else{
        ?>
            <label for="province">PROVINCIAS:</label>
            <select name="province" id="province">
                <?php 
                    foreach ($PROVINCIAS as $id => $value) {
                        printf("<option value=%s>%s</option>", $id, $value);
                    }
                ?>
            </select>
            <input type="submit" value="enviar">
        <?php
        }
        ?>
    </form>
</body>
</html>