<!-- Exercice 4-2 -->
<?php
$n = isset($_GET["n"]) ? $_GET["n"] : null;
if ($n > 0) {
    $btSend = isset($_POST["btSend"]) ? $_POST["btSend"] : null;
    $max = null;
    $numbers =  array_fill(0, $n, null);
    if ($btSend == "max" && isset($_POST["numbers"])) {
        $numbers =  $_POST["numbers"];
        foreach ($numbers as $value) {
            if ($max < $value)
                $max = $value;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4-2</title>
</head>

<body>
    <?php
    if ($n > 0) :
    ?>

        <form action="" method="post">
            <?php
            for ($i = 1; $i <= $n; $i++) {
            ?>
                <label for="N<?= $i; ?>">N<?= $i; ?></label>
                <input type="number" name="numbers[]" id="N<?= $i; ?>" value="<?= $numbers[$i - 1]; ?>"><br>
            <?php
            }
            ?>
            <button type="submit" name="btSend" value="max">Max</button>
            <button type="submit" name="btSend" value="clear">Vider</button>
        </form>
        <?php
        if ($max) :
        ?>
            <div>
                <p>La valeur la plus grande est: <?= $max; ?></p>
            </div>
        <?php
        endif;
        ?>
    <?php
    else :
    ?>
        <div>
            <p>Entrez un nombre positif!</p>
        </div>
    <?php
    endif;
    ?>
</body>

</html>
