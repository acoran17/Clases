<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num1 = rand(1,100);
    echo $num1;
    $num2 = rand(1,100);
    echo $num2;
 
    ?>
    
    <form action="" method="get">
        <?php
            echo $num1;
        ?>
        +
        <?php 
            echo $num2; 
        ?>
        =
        <input type="number" name="resultado" id="resultado">

        <input type="submit" value="comprobar">
    </form>

    <?php 
        if(isset($_GET["resultado"])) { 
            $resultado = $_GET["resultado"];
            if (($num1 + $num2) == $resultado) {
                echo "El resultado es: CORRECTO! :>";
            }else {
                echo "El resultado es: INCORRECTO! :C";
            }
        }
    ?>

</body>
</html>