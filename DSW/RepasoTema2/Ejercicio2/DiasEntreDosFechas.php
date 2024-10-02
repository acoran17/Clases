<?php
    function calculateDaysDifference($date1, $date2) {
        $dateObj1 = new DateTime($date1);
        $dateObj2 = new DateTime($date2);
        $diff = $dateObj1->diff($dateObj2);
        return $diff->days;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="date" name="date1" id="date1">
        <input type="date" name="date2" id="date2">
        <input type="submit" value="Calculate">
    </form>

    <?php 
        if (!empty($_GET['date1']) && !empty($_GET['date2'])) {
            // $date1Str = $_GET["date1"]; 
            $date1 = $_GET['date1'];
            // $date2Str = $_GET["date2"];
            $date2 = $_GET['date2'];
            $daysDifference = calculateDaysDifference($date1,$date2);
        }
        if (isset($daysDifference)) {
            echo "<h2>Dias de diferencia: $daysDifference days</h2>";
        }
    ?>
</body>
</html>