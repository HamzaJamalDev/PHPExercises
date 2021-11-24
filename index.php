<!-- Exercice 1: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <?php
    $image = 'logo.jpg';
    $titre1 = 'Accueil';
    $titre2 = 'Menu';
    $menu = [
        "Accueil" => "index.php",
        "A propos" => "propos.php",
        "Nos produits" => "produits.php",
        "Contacts" => "contact.php"
    ];
    ?>
    <img src="<?php echo $image; ?>" alt="logo">
    <h1><?php echo $titre1; ?></h1>
    <h1><?php echo $titre2; ?></h1>
    <ul>
        <?php
        foreach ($menu as $text => $lien) :
        ?>
            <li>
                <a href="<?= $lien; ?>"><?= $text; ?></a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
    <!-- OU bien -->
    <ul>
        <?php
        foreach ($menu as $text => $lien) {
            echo "<li>";
            echo "<a href=$lien>$text</a";
            echo "</li>";
        }
        ?>
    </ul>
    <br>
</body>

</html>
