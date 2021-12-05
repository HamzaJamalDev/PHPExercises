<!-- Exercice 1: -->
<!-- Récupération des valeurs : nom, age et bouton -->
<?php
// $op est une variable pour stocker la valeur du bouton ("send" ou "clear") ou bien null
$op = isset($_GET["btSend"]) ? $_GET["btSend"] : null;
// Vider les champs nom et age si l'utilisateur a cliqué sur le bouton Vider
if ($op == "clear") {
    $nom = null;
    $age = null;
    $message = "Vous avez vidé tous les champs";
}
// Récupérer les valeurs des champs nom et age si l'utilisateur a cliqué sur le bouton Envoyer
elseif ($op == "send") {
    $nom = isset($_GET["nom"]) ? htmlentities($_GET["nom"]) : null;
    $age = isset($_GET["age"]) ? htmlentities($_GET["age"]) : null;

    /* Ou bien
    if (isset($_GET["nom"])) {
        $nom = $_GET["nom"];
    }
    else {
        $nom = null;
    }

    if (isset($_GET["age"])) {
        $age = $_GET["age"];
    }
    else {
        $age = null;
    }
    */
    // Si $nom et $age ont les valeurs entrées par l'utilisateur
    if ($nom && $age) {
        $message = "Bienvenu $nom, vous avez $age ans";
    }
    // Si $nom et $age ont la valeur null
    else {
        $message = "Entrez toutes les informations";
    }
}
// Ne rien afficher au début
else {
    $nom = null;
    $age = null;
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <form action="" method="get">
        <label for="nom">Votre Nom</label>
        <input id="nom" type="text" name="nom" value="<?= $nom; ?>"><br>
        <label for="age">Votre Age</label>
        <input id="age" type="number" name="age" value="<?= $age; ?>"><br>
        <button type="submit" name="btSend" value="send">Envoyer</button>
        <button type="submit" name="btSend" value="clear">Vider</button>
    </form>
    <!-- Afficher un paragraphe qui contient un message si $message est different de "" -->
    <?php if ($message) :
    ?>
        <div>
            <p><?= $message; ?></p>
        </div>
    <?php
    endif ?>
</body>

</html>
