<!-- Exercice 2:-->
<?php
$op = isset($_POST["operation"]) ? $_POST["operation"] : null;
$num1 = isset($_POST["numero1"]) ? htmlentities($_POST["numero1"]) : 0;
$num2 = isset($_POST["numero2"]) ? htmlentities($_POST["numero2"]) : 0;
$res = null;
$error = "";

switch ($op) {
    case '+':
        $res = $num1 + $num2;
        break;
    case '-':
        $res = $num1 - $num2;
        break;
    case '*':
        $res = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            $error = "Erreur: Vous ne pouvez pas diviser par 0";
            $res = null;
            break;
        }
        $res = $num1 / $num2;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <h1>Calculatrice Simple</h1>
    <form action="" method="post">
        <input type="number" name="numero1" id="num1" value="<?= $num1; ?>">
        <label for="num1">Premier numero</label><br>
        <input type="number" name="numero2" id="num2" value="<?= $num2; ?>">
        <label for="num2">Deuxieme numero</label><br>
        <input type="number" name="result" id="res" value="<?= $res; ?>" disabled>
        <label for="res">Resultat</label><br>
        <button type="submit" name="operation" value="+">Ajouter</button>
        <button type="submit" name="operation" value="-">Soustraire</button>
        <button type="submit" name="operation" value="*">Multiplier</button>
        <button type="submit" name="operation" value="/">Diviser</button>
    </form>

    <?php if ($error) : ?>
        <div>
            <p><?= $error; ?></p>
        </div>
    <?php endif ?>
    </div>
</body>

</html>
