<?php
session_start();
$message = null;
$class = null;
if (!isset($_SESSION["random"])) {
    $random = rand(0, 10);
    $_SESSION["random"] = $random;
} else {
    $rand = htmlspecialchars($_SESSION["random"]);
    $btSend = isset($_GET["btSend"]) ? htmlspecialchars($_GET["btSend"]) : null;
    if ($btSend == "send") {
        $n = isset($_GET["n"]) ? $_GET["n"] : null;
        if ($rand == $n) {
            $message = "Bravo!";
            $class = "alert-success";
            unset($_SESSION["random"]);
        } else {
            $message = "Reessayer!";
            $class = "alert-danger";
        }
    } elseif ($btSend == "replay") {
        $random = rand(0, 10);
        $_SESSION["random"] = $random;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Game</title>
</head>

<body>
    <div class="container">
        <form action="" method="get">
            <label for="n" class="form-label">Nombre</label>
            <input type="number" name="n" id="n" class="form-control"><br>
            <button type="submit" name="btSend" value="send" class="btn btn-primary">Envoyer</button>
            <button type="submit" name="btSend" value="replay" class="btn btn-warning">Reessayer</button>
            <br><br>
        </form>
        <?php
        if ($message) {
        ?>
            <div class="alert <?= $class; ?>">
                <p><?= $message; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
