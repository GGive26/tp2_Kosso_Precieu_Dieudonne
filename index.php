
<!DOCTYPE html>
<html lang="en">
<head >
    <link rel="stylesheet" href="./style/monstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body id="affichage">
    <h1 class="titre">Page D'Acceuil</h1>
    <br>
    <h3>Ceci est un site d'inscription</h3>
    <br>
    <p>Nous vous prions de remplir le champs de texte concernons le nombre d'adresse
        que vous possedez
    </p>
    <form action="./pages/result.php" method="Post">
        <label for="Nb_adresse">Nombre d'adresse</label>
        <input type="text" id="Nb_adresse"  name="Nb_adresse" value="1">
        <br><br>
        <input type="submit" value="confirmer">
    </form>
</body>
</html>