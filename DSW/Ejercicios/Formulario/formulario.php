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
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name" placeholder="Escribe tu nombre">
        </p>
        <p>
            <label for="age">Edad: </label>
            <input type="number" id="age" name="age" min="18" value="20">
        </p>
        <p>
            <label for="hobby">Aficiones</label>
            <select name="hobby" id="hobby">
                <option>Programar</option>
                <option>Bailar</option>
                <option>Dormir</option>
                <option>Pescar</option>
            </select>
        </p>
        <p>
            <input type="checkbox" name="course" id="course">
            <label for="course">Matriculado en el ciclo</label>
        </p>
        <p>
            <span>¿Que te gusta mas?</span>
            <input type="radio" name="side" id="frontend" value="frontend" checked>
            <label for="frontend">Frontend</label>
            <input type="radio" name="side" id="backend" value="backend">
            <label for="backend">Backend</label>
            <input type="radio" name="side" id="fullstack" value="fullstack">
            <label for="fullstack">Fullstack</label>
        </p>
        <p>
            <?php require_once('subjectData.php')?>
            <label for="subject">Módulo que más te gusta</label>
            <select name="subject" id="subject">
                <?php foreach($subjects as $key => $subject) {?>
                    <option value="<?= $key?>">
                        <?= $subject ?>
                    </option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="company">¿Dónde te gustaría hacer las prácticas?</label>
            <select name="companiesId[]" id="company" multiple>
                <?php require_once('companies.php');?>
                <?php for ($i=0; $i < count($companies); $i++) { 
                    printf('<option value="%d">%s</option>', $i, $companies[$i]);    
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</script>
</body>
</html>