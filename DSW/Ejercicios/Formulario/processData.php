<?php
    require_once('subjectData.php');
    require_once('companies.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Obteniendo Datos</h1>
    <p>
        Nombre:
        <?php echo $_POST['name'];?>
    </p>
    <p>
        Edad:
        <?php echo $_POST['age'] ?>
    </p>
    <p>
        Afición:
        <?php echo $_POST['hobby'] ?>
    </p>
    <p>
    <?php if(isset( $_POST['course'])) {?>
        <p>
            Matriculador en el ciclo:
            <?= $_POST['course'];?>
        </p>
    <?php } ?>
    </p>
    <p>
        Lado preferido:
        <?= $_POST['side'];?>
    </p>
    <p>
        Modulo preferido:
        <?php echo $_POST['subject']?> -
        <?php echo $subjects[$_POST['subject']]?>
    </p>
    <p>
        Compañía preferida:
        <ul>
            <?php
                $companiesId = $_POST['companiesId'];
                foreach($companiesId as $id) {
                    printf('<li>%s<li>', $companies[$id]);
                }
            ?>
        </ul>
    </p>
</body>
</html>