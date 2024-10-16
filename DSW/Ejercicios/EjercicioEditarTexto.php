<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width:50px; 
        }
    </style>
</head>
<body>
    <p>Dado</p>
    <img src="sides/<?=rand(1,6)?>.png" alt="">
    <form action="TextoCompletado.php" method="post" enctype="multipart/form-data">
            <p>
                Pon el texto que quieras:
            </p>
                <textarea name="text" id="text"></textarea>
            <p>
                Envia un texto:
            </p>
                <input type="file" accept=".txt" name="file">
            <p>
                Color de la letra:
            </p>
            <input type="color" id="color" name="color" value="#000000">
            <p>
                Tamaño de la letra:
            </p>
            <input type="range" id="size" name="size" min=8 max=64 oninput="this.nextElementSibling.value = this.value">
            <output>36</output>
            <p>
                <input type="submit" value="enviar">
            </p>
    </form>
</body>
</html>