<?php
$numero = 3;
// changez $guess et testez:
$guess = 1;
if ($guess < $numero) {
    $message = "$guess est inf de $numero";
    $color = "red";
} elseif ($guess > $numero) {
    $message = "$guess est sup de $numero";
    $color = "green";
} else {
    $message = "$guess est egale a $numero";
    $color = "blue";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+CSS</title>
</head>

<body>
    <p style="color: <?= $color; ?>;"><?= $message; ?></p>
</body>

</html>
