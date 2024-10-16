<?php require_once 'questions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //recojos las variables y compruebo si es correcto lo que envia el usuario
        if (!empty($_GET['statement'])) {
            //recojo el anterior count
            $count = $_GET['count'];
            echo "Pregunta: " . $_GET['statement'];
            echo "<p>";
            echo "Respuesta: " . $_GET['correct'];
            if($_GET['results'] == $_GET['correct']) {
                echo '<h3 style="color:green;">CORRECTO</h3>';
                $count++;
            }else {
                echo '<h3 style="color:red">INCORRECTO</h3>';
            }
            echo "Puntos: " . $count;
        }else{
            $count = 0;
        }
    
    ?>
    <form action="Preguntado.php?" method="get">
        <input type="hidden" name="count" value="<?= $count ?>">
        <?php
            //recojo una pregunta con respuesta totalmente random
            shuffle($questions);
            $question = $questions[array_rand($questions)];
        ?>
        <!-- muestro la pregunta y las posibles respuestas estas ultimas al azar haciendo un radio -->
        <h2><?=$question['statement']?></h2>
        
        <input type="hidden" name="statement" value="<?=$question['statement']?>">
        
        <?php $answers = $question['answers'];?>
        <input type="hidden" name="correct" value ="<?=$answers[0]?>">
        <?php   
            shuffle($answers);
            foreach ($answers as $answer) { 
        ?>

            <label for="<?=$answer?>"><?=$answer?></label>
            <input type="radio" id="<?=$answer?>" name="results" value="<?=$answer?>">

        <?php 
            } 
        ?>
        <input type="submit" value="enviar">
    </form>
</body>
</html>