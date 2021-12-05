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
    // Déclarer les variables utilisées
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
    <!-- Afficher l'image, les titres et le menu -->
    <img src="<?php echo $image; ?>" alt="logo">
    <h1><?php echo $titre1; ?></h1>
    <h1><?php echo $titre2; ?></h1>
    <!-- Le menu est affiché en utilisant une liste non ordonnée -->
    <ul>
        <?php
        // Itérer sur le tableau $menu par la boucle foreach
        foreach ($menu as $text => $lien) :
        ?>
            <!-- Afficher les éléments de la liste sous forme des liens -->
            <li>
                <a href="<?= $lien; ?>"><?= $text; ?></a>
            </li>
        <?php
        // Fin de la boucle (endforeach;)
        endforeach;
        ?>
    </ul>
    <!-- OU bien -->
    <!-- À la place de séparer le PHP de l'HTML, on a utilisé un script PHP pour afficher tous les éléments nécessaires -->
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
