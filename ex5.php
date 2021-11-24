<!-- Exercice 5: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <ul>
        <?php
        for ($i = 1; $i < 21; $i++) :
        ?>
            <li><?= $i; ?><sup>2</sup> = <?= $i ** 2; ?></li>
        <?php
        endfor;
        ?>
    </ul>
</body>

</html>
