<!-- Exercice 4: -->
<?php
$helloMessage = "Hello PHP, nous sommes le " . date("d-m-Y");
$GreetingMessage = "Bonne après midi";
if (date("H") < 12)
    $GreetingMessage = "Bon matin";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <p>
        <?= $helloMessage; ?>
    </p>
    <p>
        <?= $GreetingMessage;?>
    </p>
</body>

</html>
