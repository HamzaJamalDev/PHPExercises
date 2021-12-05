<!-- Exercice 3: -->
<?php
$salaires = [
    "A" => 1000,
    "B" => 1200,
    "C" => 1400,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <table border="1px" style="width: 100%;">
        <?php
        foreach ($salaires as $nom => $salaire) :
        ?>
            <tr>
                <td style="color: blue;">Le salaire de M. <?= $nom; ?> est</td>
                <td><?= $salaire; ?>$</td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</body>

</html>
