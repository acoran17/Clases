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
        
    ?>
    <h1>
        La provincia que has elegido es: 
        <?php 
        
        if (isset($_GET["province"])) {
            $province = $_GET["province"];
            $tamaño = sizeof($province);
            for ($i=0; $i < $tamaño; $i++) { 
                echo $province[$i];
                if (($i) == $tamaño-1) 
                {echo ".";} 
                elseif ($tamaño >= 2) 
                {echo ",";} 
            }
        }else{
            echo "No has escogido nada";
        }

        
        // foreach ($province as $p) {
        
        // } 
        ?>
    </h1>
</body>
</html>