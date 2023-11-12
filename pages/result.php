
<head>
    <link rel="stylesheet" href="../style/monstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="affichage2">
    <?php
    
    //j'effectue ma premiere  validation qui verras si l'element envoyer est un entier
    
    if(is_numeric($_POST['Nb_adresse'])){
        $imax=intval($_POST['Nb_adresse']);
        for ($i=0; $i <$imax ; $i++) { 
             /* creation des formulaires dans la boucle  */
        ?>
       
        <h1>Formulaire de Renseignement</h1>
        <legend>
        <form  method="post" action="./confirmation.php">

        <label for="street">Street<?php $i ?> : </label>
        <input type="text" id="street" value="entrez votre adresse" name="street<?php $i ?>"><br>

        <label for="street_nb">Street_number<?php $i ?> : </label>
        <input type="text" id="street_nb" value="entrez votre numero de rue" name="street_nb<?php $i ?>"><br>

        <label for="type<?php $i ?>">Type<?php $i ?> : </label>
        <select name="type<?php $i ?>" id="type<?php $i ?>">
        <option>Facturation</option>
        <option>Livraison</option>
    </select><br>

        <label for="city<?php $i ?>">City<?php $i ?> : </label>
        <select name="city<?php $i ?>" id="city<?php $i ?>">
        <option>Montreal</option>
        <option>Toronto</option>
        <option>Vancouver</option>
        <option>Sherbrooke</option>
    </select><br>

        <label for="zipcode">Zipcode<?php $i ?> : </label>
        <input type="text" id="zipcode" value="entrez votre zipcode" name="zipcode<?php $i ?>"><br>
        </legend>
        <?php
            
        } 
        ?>
        <br>
        <br>
        <input type="submit" value="envoyer">
    </form>
    <?php
    }
    //message d'erreur en cas d'echec de validtion et envoie vers la page Index
    else{
        echo"Nombre d'adresse incorrect , Veuillez retournez dans la page precedente ";
        ?>
        <br>
        <br>
        <a href="../index.php" >Precedent</a>
        <?php
    }
      ?>
</body>
