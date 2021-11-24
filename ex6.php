<!-- Exercice 6: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>
    <p>
        <?php
        for ($i = 1; $i < 31; $i++) :
        ?>
            <?= $i; ?>
            <?php
            if ($i == 30) :
                break;
            endif;
            ?>
            -
        <?php
        endfor;
        ?>
    </p>
</body>

</html>
