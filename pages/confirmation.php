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

echo "<form method='post' action='./sender.php' >";
if (count($infos) > 0) {
    foreach ($infos as $key => $value) {
        echo "<input type='text' id='$key' value='$value' readonly /><br>";
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
var_dump($globaldata);
?>
<input type="submit" value="confirmer">
<?php
echo "</form>";
?>
<button><a href="../index.php">annuler</a></button>
</body>

</html>