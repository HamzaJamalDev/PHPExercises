<?php
$definedGenders = ["Masculin" => "male", "Féminin" => "female"];
$definedCountries = ["Maroc" => "maroc", "France" => "france", "USA" => "usa", "United Kingdom" => "uk"];
$definedLangages = ["Java" => "java", "C" => "c", "C++" => "c++", "PHP" => "php"];
$definedActivities = ["Informatique" => "info", "Gestion" => "gestion", "Pédagogie" => "peda"];

$nom = isset($_GET["nom"]) ? htmlspecialchars($_GET["nom"]) : null;
$prenom = isset($_GET["prenom"]) ? htmlspecialchars($_GET["prenom"]) : null;
$email = isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : null;
$gender = isset($_GET["gender"]) ? htmlspecialchars($_GET["gender"]) : null;
$country = isset($_GET["country"]) ? htmlspecialchars($_GET["country"]) : null;
if (isset($_GET["langages"])) {
    foreach ($_GET["langages"] as $value) {
        $langages[] = htmlspecialchars($value);
    }
} else {
    $langages = [];
}
if (isset($_GET["activities"])) {
    foreach ($_GET["activities"] as $value) {
        $activities[] = htmlspecialchars($value);
    }
} else {
    $activities = [];
}
$btSend = isset($_GET["btSend"]) ? htmlspecialchars($_GET["btSend"]) : null;
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
    <fieldset>
        <legend>Formulaire d'inscription</legend>
        <form action="" method="get">
            <table>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td>
                        <input type="text" name="nom" id="nom" placeholder="saisir votre nom" <?php if ($nom) : ?> value="<?= $nom; ?>" <?php endif; ?>>
                        <span style="color: red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label for="pnom">Prénom</label></td>
                    <td>
                        <input type="text" name="prenom" id="pnom" placeholder="saisir votre prenom" <?php if ($prenom) : ?> value="<?= $prenom; ?>" <?php endif; ?>>
                        <span style="color: red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="text" name="email" id="email" placeholder="saisir votre email" <?php if ($email) : ?> value="<?= $email; ?>" <?php endif; ?>>
                        <span style="color: red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Sexe</label></td>
                    <td>
                        <?php
                        foreach ($definedGenders as $key => $value) {
                        ?>
                            <label for="<?= $value; ?>"><?= $key; ?></label>
                            <input type="radio" name="gender" id="<?= $value; ?>" value="<?= $value; ?>" <?php if ($gender == $value) : ?> <?= "checked" ?> <?php endif; ?>>
                        <?php
                        }
                        ?>
                        <span style="color: red;">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label for="country">Pays</label></td>
                    <td><select name="country" id="country">
                            <?php
                            foreach ($definedCountries as $key => $value) {
                            ?>
                                <option value="<?= $value; ?>" <?php if ($country == $value) : ?> <?= "selected" ?> <?php endif; ?>><?= $key; ?></option>
                            <?php
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="langages">Les langages préférés</label></td>
                    <td><select name="langages[]" id="langages" size="4" multiple>
                            <?php
                            foreach ($definedLangages as $key => $value) {
                            ?>
                                <option value="<?= $value; ?>" <?php if (in_array($value, $langages)) : ?> <?= "selected" ?> <?php endif; ?>><?= $key; ?></option>
                            <?php
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="">Domaines d'activités</label></td>
                    <td>
                        <?php
                        foreach ($definedActivities as $key => $value) {
                        ?>
                            <input type="checkbox" name="activities[]" id="<?= $value; ?>" value="<?= $value; ?>" <?php if (in_array($value, $activities)) : ?> <?= "checked" ?> <?php endif; ?>>
                            <label for="<?= $value; ?>"><?= $key; ?></label>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <button type="submit" name="btSend" value="send">Envoyer</button>
            <button type="submit" name="btSend" value="clear">Annuler</button>
        </form>
    </fieldset>
</body>

</html>
