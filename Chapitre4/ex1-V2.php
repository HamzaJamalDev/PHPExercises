<!-- Exercice 1 Version 2 -->
<!-- Darhoni Othmane (G5) : -->
<!-- & -->
<!-- Zineb Halhal (G5) : -->
<?php
if (!isset($_COOKIE["test"])) {
    $x = rand(0, 10);
    setcookie("test", $x, time() + 3600, "/");
} else {
    $x = htmlspecialchars($_COOKIE["test"]);
}
$send = isset($_POST["send"]) ? htmlspecialchars($_POST["send"]) : null;
$reload = isset($_POST["reload"]) ? htmlspecialchars($_POST["reload"]) : null;
$tesst = isset($_POST["tesst"]) ? htmlspecialchars($_POST["tesst"]) : null;
if ($reload != null) {
    $x = rand(0, 10);
    setcookie("test", $x, time() + 3600, "/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            margin-left: 150px;
            margin-top: 50px;
        }

        .send {
            background-color: DodgerBlue;
            color: #FFF;
            border-radius: 5px;
            height: 35px;
            width: 80px;
            font-weight: 700;
        }

        .reload {
            background-color: yellow;
            border-radius: 5px;
            height: 35px;
            width: 90px;
            font-weight: 700;
        }

        .test {
            background-color: red;
        }

        .textMessage {
            background-position: right bottom, left top;
            background-repeat: no-repeat, repeat;
            padding: 15px;
            width: 500px;
            height: 60px;
            border-radius: 7px;
        }

        #textFail {
            background-color: rgba(255, 0, 0, 0.3);
        }

        #textSuccess {
            background-color: rgba(0, 255, 0, 0.3);
        }

        #textReplay {
            background-color: rgba(255, 127, 0, 0.3);
        }

        label {
            font-weight: bold;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <label>Nombre</label><br>
        <input type="number" name="tesst" id="tesst" style="width:500px" value="<?= $tesst ?>" />
        <br><br>
        <input type="submit" id="send" name="send" value="Envoyer" class="send">
        <input type="submit" id="reload" name="reload" value="Reessayer" class="reload">

        <?php
        if ($send != null) {
            if ($x == $tesst) {
        ?>
                <p id="textSuccess" class="textMessage">
                    Bravo! Vous avez trouvé la valeur aléatoire
                </p>

            <?php
                setcookie("test", "", time() - 3600, "/");
            } else {
            ?>
                <p id="textFail" class="textMessage">
                    Entrez une autre valeur
                </p>
            <?php
            }
        } elseif ($reload != null) {
            ?>
            <p id="textReplay" class="textMessage">
                Vous pouvez jouer à nouveau
            </p>
        <?php
        }
        ?>
    </form>

</body>

</html>
