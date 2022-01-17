<!-- Darhoni Othmane (G5) : -->
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

        .clear {
            background-color: yellow;
            border-radius: 5px;
            height: 35px;
            width: 90px;
            font-weight: 700;
        }

        .test {
            background-color: red;
        }

        #text {
            background-color: rgba(255, 0, 0, 0.3);
            background-position: right bottom, left top;
            background-repeat: no-repeat, repeat;
            padding: 15px;
            width: 500px;
            height: 60px;
            border-radius: 7px;

        }

        strong {
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
    </style>
</head>

<body>
    <?php
    $x = rand(0, 10);
    setcookie("test", $x, time() + 3600, "/");

    $tesst = isset($_POST["tesst"]) ? $_POST["tesst"] : null;

    ?>

    <form action="" method="post">
        <strong>Nombre<strong> <br>
                <input name="tesst" id="tesst" style="width:500px" value="<?= $tesst ?>" />
                <br><br>
                <input type="submit" id="send" name="send" value="Envoyer" class="send">
                <input type="reset" id="clear" name="clear" value="Reessayer" class="clear">

                <p id="text">
                    <?php
                    if ($x == $tesst) {
                        echo "Bravo! Vous avez devine la valeur aleatoire";
                    } else {
                        echo "Entrer une autre valeur";
                    }
                    ?>

                </p>
    </form>


</body>

</html>
