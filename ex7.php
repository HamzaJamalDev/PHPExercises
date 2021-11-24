<!-- Exercice 7: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>
    <table border="1px" cellpadding="3px" cellspacing="0px" style="width: 100%;">
        <?php
        for ($i = 1; $i < 7; $i++) :
        ?>
            <tr>
                <?php
                for ($j = 1; $j < 6; $j++) :
                ?>
                    <td><?= $i; ?> x <?= $j; ?> = <?= $i * $j; ?></td>
                <?php
                endfor;
                ?>
            </tr>
        <?php
        endfor;
        ?>
    </table>
</body>

</html>
