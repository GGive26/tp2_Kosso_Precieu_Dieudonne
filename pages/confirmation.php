<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
</head>
<body class="confirmation">
    <h1>PAGE DE CONFIRMATION</h1><br><br>
    <h3>Si les informations sont exactes il vous suffit de confirmer au cas contraire annuler</h3>
<?php
//appel de la page function pour pouvoir l'utuliser
require_once('../functions/function.php');
if (isset($_SESSION['imax'])) {
    $imax = intval($_SESSION['imax']);
};
?>
<?php

//insertion du $POST recuperer dans la variable $infos


$infos = $_POST;

//affichage du formulaire dans lequelle serons nos informations de $infos

echo "<form method='post' action='./sender.php' width='200px' height='200px' >";
if (count($infos) > 0) {
    foreach ($infos as $key => $value) {
        echo "<input type='text' id='$key' value='$value' readonly /><br><br>";
        if (isset($_POST['street']) || isset($_POST['street_nb']) || isset($_POST['zipcode'])) {

            //execution des validations 

            $streetisValid = streetIsValid($infos['street']);
            $streetNbisValid = streetNbIsValid($infos['street']);
            $zipcodeisValid = zipcodeIsValid($infos['street']);
            var_dump($zipcodeisValid);
            var_dump($streetisValid);
            var_dump($streetNbisValid);
        }
    }
}

//insertion de chaque $data valeur dans $globaldata

if (isset($_POST) || $streetisValid = true || $streetNbisValid = true || $zipcodeisValid = true) {
    for ($i = 1; $i <= $imax; $i++) {
        $data = [
            "street" => $infos["street$i"],
            "street_nb" => $infos["street_nb$i"],
            "type" => $infos["type$i"],
            "city" => $infos["city$i"],
            "zipcode" => $infos["zipcode$i"]
        ];
        $globaldata[$i] = $data;
    }
}

//insertion de globaldata dans session afin de pouvoir l'utuliser ou l'on souhaite

$_SESSION['data'] = $globaldata;
?>
<input type="submit" value="confirmer"><br>
<button><a href="../index.php">annuler</a></button>
<?php
echo "</form>";
?>
</body>
</html>

