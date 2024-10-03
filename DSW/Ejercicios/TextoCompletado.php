<?php
    $text = $_POST["text"];
    $color = $_POST["color"];
    $size = $_POST["size"];
    $file = $_FILES["file"];
    if(!move_uploaded_file($_FILES['file']['tmp_name'],"".basename($_FILES['file']['name']))){
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color:<?=$color?>;
            font-size:<?=$size?>px;
        }
    </style>
</head>
<body>
    <h1>Texto Cambiado</h1>
    <p><?=$text?></p>
    <p><?=include($_FILES['file']['name']);?></p>
</body>
</html>