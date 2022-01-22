<!-- Exercice 4 Version 2 -->
<!-- Manal Namir (G3) : -->
<?php
$valeurs = [null];
$max = null;
if (isset($_GET["btn"])) {
    $btn = htmlspecialchars($_GET["btn"]);
    if (isset($_GET["valeurs"])) {
        $valeurs = $_GET["valeurs"];
    }

    if ($btn == "more") {
        $valeurs[] = null;
    } elseif ($btn == "less" and count($valeurs) > 1) {
        array_pop($valeurs);
    } elseif ($btn == "max") {
        $max = max($valeurs);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Exercice 4 Version 2</title>
</head>

<body>
    <div class="container">
        <form action="" method="get" class="mt-3 g-3">
            <div class="row mb-2">
                <?php
                foreach ($valeurs as $i => $value) {
                ?>
                    <div class="col-10">
                        <label class="form-label" for="N<?= $i + 1; ?>">Number <?= $i + 1; ?></label>
                        <input class="form-control" type="number" name="valeurs[]" id="N<?= $i + 1; ?>" value="<?= $value; ?>">
                    </div>
                    <?php
                    if ($i != count($valeurs) - 1) {
                    ?>
                        <br>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
                <div class="col-2 d-flex align-items-end justify-content-around">
                    <button class="btn btn-primary" type="submit" name="btn" value="more">+</button>
                    <button class="btn btn-danger" type="submit" name="btn" value="less">-</button><br>
                </div>
            </div>
            <button class="btn btn-success" type="submit" name="btn" value="max">Max</button>
        </form>
        <?php
        if ($max) {
        ?>
            <br>
            <div class="alert alert-success">
                <p>Le max est : <?= $max; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
