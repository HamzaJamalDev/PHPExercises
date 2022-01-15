<?php
// Define Possible options
$definedGenders = ["Masculin" => "male", "Féminin" => "female"];
$definedCountries = ["Maroc" => "maroc", "France" => "france", "USA" => "usa", "United Kingdom" => "uk"];
$definedLangages = ["Java" => "java", "C" => "c", "C++" => "c++", "PHP" => "php"];
$definedActivities = ["Informatique" => "informatique", "Gestion" => "gestion", "Pédagogie" => "pedagogie"];

// Initialize variables
$nom = $prenom = $email = $gender = null;
$country = $definedCountries["Maroc"];
$langages = $activities = [];

// Inialize Error messages
$errorLastName = $errorFirstName = $errorEmail = $errorGender = "*";
$errorCountry = $errorLangages = $errorActivities = null;
$errorInvalidOption = "Sélectionner juste les options données";

// Initialize validForm that is used to check whether we have an error or not
$validForm = false;

if (isset($_GET["btSend"])) {
    $btSend = htmlspecialchars($_GET["btSend"]);
    if ($btSend == "send") {
        $validForm = true;
        if (isset($_GET["nom"])) {
            $nom = htmlspecialchars($_GET["nom"]);
            if (empty($nom)) {
                $errorLastName = "Entrez votre nom!";
                $validForm = false;
            } else {
                $isValid = preg_match("#^[a-zA-Z'\- ]+$#", $nom);
                if (!$isValid) {
                    $errorLastName = "Nom est invalide";
                    $validForm = false;
                } else {
                    $errorLastName = null;
                }
            }
        }

        if (isset($_GET["prenom"])) {
            $prenom = htmlspecialchars($_GET["prenom"]);
            if (empty($prenom)) {
                $errorFirstName = "Entrez votre prenom!";
                $validForm = false;
            } else {
                $isValid = preg_match("#^[a-zA-Z'\- ]+$#", $prenom);
                if (!$isValid) {
                    $errorFirstName = "Prenom est invalide";
                    $validForm = false;
                } else {
                    $errorFirstName = null;
                }
            }
        }

        if (isset($_GET["email"])) {
            $email = htmlspecialchars($_GET["email"]);
            if (empty($email)) {
                $errorEmail = "Entrez votre email!";
                $validForm = false;
            } else {
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);
                if (!$isValid) {
                    $errorEmail = "Email est invalide";
                    $validForm = false;
                } else {
                    $errorEmail = null;
                }
            }
        }

        if (isset($_GET["gender"])) {
            $gender = htmlspecialchars($_GET["gender"]);
            if (empty($gender)) {
                $errorGender = "Entrez votre sexe!";
                $validForm = false;
            } else {
                if (!in_array($gender, $definedGenders)) {
                    $errorGender = $errorInvalidOption;
                    $validForm = false;
                } else {
                    $errorGender = null;
                }
            }
        } else {
            $errorGender = "Entrez votre sexe!";
            $validForm = false;
        }

        if (isset($_GET["country"])) {
            $country = htmlspecialchars($_GET["country"]);
            if (!in_array($country, $definedCountries)) {
                $errorCountry = $errorInvalidOption;
                $validForm = false;
            }
        }

        if (isset($_GET["langages"])) {
            foreach ($_GET["langages"] as $value) {
                if (!in_array($value, $definedLangages)) {
                    $errorLangages = $errorInvalidOption;
                    $validForm = false;
                    $langages = [];
                    break;
                }
                $langages[] = htmlspecialchars($value);
            }
        }

        if (isset($_GET["activities"])) {
            foreach ($_GET["activities"] as $value) {
                if (!in_array($value, $definedActivities)) {
                    $errorActivities = $errorInvalidOption;
                    $validForm = false;
                    $activities = [];
                    break;
                }
                $activities[] = htmlspecialchars($value);
            }
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
    <title>Exercice 3</title>
</head>

<body>
    <fieldset>
        <legend>Formulaire d'inscription</legend>
        <form action="" method="get">
            <table>
                <tr>
                    <td><label for="n">Nom</label></td>
                    <td>
                        <input type="text" name="nom" id="n" placeholder="saisir votre nom" <?php if ($nom) : ?> value="<?= $nom; ?>" <?php endif; ?>>
                        <?php
                        if ($errorLastName) {
                        ?>
                            <span style="color: red;"><?= $errorLastName; ?></span>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="pnom">Prénom</label></td>
                    <td>
                        <input type="text" name="prenom" id="pnom" placeholder="saisir votre prenom" <?php if ($prenom) : ?> value="<?= $prenom; ?>" <?php endif; ?>>
                        <?php
                        if ($errorFirstName) {
                        ?>
                            <span style="color: red;"><?= $errorFirstName; ?></span>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="text" name="email" id="email" placeholder="saisir votre email" <?php if ($email) : ?> value="<?= $email; ?>" <?php endif; ?>>
                        <?php
                        if ($errorEmail) {
                        ?>
                            <span style="color: red;"><?= $errorEmail; ?></span>
                        <?php
                        }
                        ?>
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
                        <?php
                        if ($errorGender) {
                        ?>
                            <span style="color: red;"><?= $errorGender; ?></span>
                        <?php
                        }
                        ?>
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
                        </select>
                        <?php
                        if ($errorCountry) {
                        ?>
                            <span style="color: red;"><?= $errorCountry; ?></span>
                        <?php
                        }
                        ?>
                    </td>
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
                        </select>
                        <?php
                        if ($errorLangages) {
                        ?>
                            <span style="color: red;"><?= $errorLangages; ?></span>
                        <?php
                        }
                        ?>
                    </td>
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
                        <?php
                        if ($errorActivities) {
                        ?>
                            <span style="color: red;"><?= $errorActivities; ?></span>
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

    <!-- Youssef Mouhyeddine (G1) : -->
    <?php
    if ($validForm) {
        if ($gender == "male") {
            $status = "M.";
        } else {
            $status = "Mme";
        }

        if (!$langages) {
            $studyMessage = "Vous ne voulez pas étudier";
        } else {
            $s = "";
            if (count($langages) > 1) {
                $s = "s";
            }
            $studyMessage = "Vous voulez étudier le$s langage$s : ";
            foreach ($langages as $value) {
                $studyMessage .= "$value ";
            }
        }
        if (!$activities) {
            $activityMessage = "s'amuser :)";
        } else {
            $s = "";
            if (count($activities) > 1) {
                $s = "s";
            }
            $activityMessage = "avancer dans le$s domaine$s : ";
            foreach ($activities as $value) {
                $activityMessage .= "$value ";
            }
        }

    ?>
        <div>
            <p>
                Bienvenue <?= "$status $prenom $nom"; ?> de <?= $country; ?><br>
                Votre adresse e-mail est <?= $email; ?><br>
                <?= $studyMessage; ?><br>
                Vous voulez <?= $activityMessage; ?>
            </p>
        </div>
    <?php
    }
    ?>

</body>

</html>
