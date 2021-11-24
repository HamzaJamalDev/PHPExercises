<!-- Exercice 2: -->
<?php
$a = 1;
$b = 2;
$c = 5;
$max = $c;

if ($a > $b && $a > $c)
    $max = $a;
elseif ($b > $c)
    $max = $b;
?>
<!-- Généralisation -->
<?php
function maximum(...$valeurs)
{
    $max = $valeurs[0];
    foreach ($valeurs as $val) {
        if ($val > $max)
            $max = $val;
    }
    return $max;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exrecice 2</title>
</head>

<body>
    <p><?= $max; ?></p>
    <p><?= maximum(1, 2, 5); ?></p>
</body>

</html>
