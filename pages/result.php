
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

        <label for="street<?php $i ?>">Street<?php $i ?> : </label>
        <input type="text" id="street<?php $i ?>" value="entrez votre adresse"><br>

        <label for="street_nb<?php $i ?>">Street_number<?php $i ?> : </label>
        <input type="text" id="street_nb<?php $i ?>" value="entrez votre numero de rue "><br>

        <label for="type<?php $i ?>">Type<?php $i ?> : </label>
        <input type="text" id="type<?php $i ?>" value="choisissez votre type"><br>

        <label for="city<?php $i ?>">City<?php $i ?> : </label>
        <input type="select" id="city<?php $i ?>" value="choisissez votre villez"><br>

        <label for="zipcode<?php $i ?>">Zipcode<?php $i ?> : </label>
        <input type="text" id="zipcode<?php $i ?>" value="entrez votre zipcode"><br>
        </legend>
        <?php
            
        } 
        ?>
        <br>
        <br>
        <input type="submit" value="envoyer">
    </form>
    <?php
    }//message d'erreur en cas d'echec de validtion et envoie vers la page Index
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
