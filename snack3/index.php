<!--
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<?php
$numbers = [];
$i = 0;
while ($i < 15) {
    $randNum = rand(1, 100);
    if (!(in_array($randNum, $numbers))) {
        $numbers[] = $randNum;
        $i++;
    }
}

var_dump($numbers);
?>

<body>
</body>

</html>