<?php
for ($i = 0; $i < 50; $i++) {
    $tableau1[] =  rand(1, 500);
    if ($tableau1[$i] <= 50) {
        $table1[] = +$tableau1[$i];
    } else {

        $table2[] = +$tableau1[$i];
    }
}
// echo  "le premier tableau :".$tableau1[].'<br>'."le deuxieme tableau :".$table1[] .'<br>'."le troisième tableau :".$table2[];

function afficheTable($tab)
{
?>
    <pre>
    <?php
    print_r($tab);
    ?>
    </pre>
    <br>
<?php
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
    <?php
        afficheTable($tableau1);
        afficheTable($table1);
        afficheTable($table2);
    ?>


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
