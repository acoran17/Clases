<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //DEFINE FUERA EL VALOR ESTABAS HACIENDO -> ECHO NUM1 = RAND() 
    //QUE ES IGUAL Q DIRECTAMENTE HACER RAND()
    //PRIMERO DEFINE LOS VALORES ALEATORIOS
    $num1 = rand(1,100);
    $num2 = rand(1,100); 

    if(!isset($_GET["resultado"])) { 
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
        
        <!-- GUARDAMOS LOS VALORES EN UN INPUT HIDDEN PARA QUE SE ENVIEN-->
        <input type="hidden" name="n1" value=<?= $num1; ?>>
        <input type="hidden" name="n2" value=<?= $num2; ?>>

        <input type="submit" value="comprobar">

    </form>

    <?php 
        //VERIFICAMOS SI TODOS LOS CAMPOS ESTÁN DEFINIDOS OSEA HAY ALGO EN EL RESULTADO Y EN LOS NUMEROS
    }else if(!empty($_GET['resultado']) && !empty($_GET['n1']) && !empty($_GET['n2'])){ 

            //Los convertimos a tipo Int para sumarlos y convertimos a int el resultado para poder compararlos.
        if (((int)$_GET['n1'] + (int)$_GET['n2']) == (int)$_GET["resultado"]) {
            echo "El resultado es: CORRECTO! :>";
        }else {
            echo "El resultado es: INCORRECTO! :C";
        }

        //caso de que falte algun parametro en la url
    }else{
        echo "ERROR";
    } 
    ?>

</body>
</html>