<head>
    <link rel="stylesheet" href="../style/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>

<body class="result">
    <h1>Formulaire de Renseignement</h1>
    <?php
    require('../functions/validation.php');
    //stockage de la variable $imax dans $_session
    session_start();
    $imax = intval($_POST['Nb_adresse']);
    $_SESSION['imax'] = $imax;

    //j'effectue ma premiere  validation qui verras si l'element envoyer est un entier
    $globalimax['imax'] = $imax;
    global $globalimax;

    if (is_numeric($_POST['Nb_adresse'])) {
        $imax = intval($_POST['Nb_adresse']);
        for ($i = 1; $i <= $imax; $i++) {
            /* creation des formulaires dans la boucle  */
    ?>


            <fieldset>
                <legend>Adresse <?php echo $i ?></legend>
                <form method="post" action="./confirmation.php">

                    <label for="street">Street<?php echo $i ?> : </label>
                    <input type="text" id="street" name="street<?php echo $i ?>"><br>

                    <label for="street_nb">Street_number<?php $i ?> : </label>
                    <input type="number" id="street_nb" name="street_nb<?php echo $i ?>"><br>

                    <label for="type<?php echo $i ?>">Type<?php echo $i ?> : </label>
                    <select name="type<?php echo $i ?>" id="type<?php echo $i ?>">
                        <option>Facturation</option>
                        <option>Livraison</option>
                    </select><br>

                    <label for="city<?php echo $i ?>">City<?php echo $i ?> : </label>
                    <select name="city<?php echo $i ?>" id="city<?php echo $i ?>">
                        <option>Montreal</option>
                        <option>Toronto</option>
                        <option>Vancouver</option>
                        <option>Sherbrooke</option>
                    </select><br>

                    <label for="zipcode">Zipcode<?php echo $i ?> : </label>
                    <input maxlength="6" type="text" id="zipcode" name="zipcode<?php echo $i ?>"><br>
            </fieldset>

        <?php

        } ?> <br>
        <br>
        <input type="submit" value="envoyer">
        </form> <?php
            }
            //message d'erreur en cas d'echec de validtion et envoie vers la page Index
            else {
                echo "Nombre d'adresse incorrect , Veuillez retournez dans la page precedente ";
                ?>
        <br>
        <br>
        <a href="../index.php">Precedent</a>
    <?php
            }
    ?>
</body>