<?php
define('exist', 36);
$classe = $message = null;
if (isset($_POST['verifier'])) {
    $classe = "alert-danger";
    $message = "Merci de réssayer une autre fois, le numéro " . exist . " n'existe pas!";
    for ($i = 0; $i < 100; $i++) {
        $tableau1[] =  rand(1, 500);
        if ($tableau1[$i] === exist) {
            $classe = "alert-success";
            $message = "Le numéro 36 existe dans ce tableau, sa position est : $i";
            break;
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css" />
    <title>Exercice 1</title>
</head>

<body>
    <div class="card  mx-auto d-flex justify-content-center" style="width:20rem;margin-top:16rem">
        <form action="" method="post">
            <div class="card-body">
                <p class="alert <?= $classe; ?>"><?= $message; ?></p>
                <h5 class="card-title">Tableau </h5>
                <input Type="submit" name="verifier" id="verifier" value="Cliquer pour verifier la valeur 36" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
