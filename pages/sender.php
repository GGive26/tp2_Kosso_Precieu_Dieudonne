<?php
    require_once('../functions/function.php');
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
</head>
<body class="sender">
<?php
    if (isset($_SESSION['data']) || isset($_SESSION['imax'])) {
        $globaldata = $_SESSION['data'];
        $imax = intval($_SESSION['imax']);
    }

    for ($i = 1; $i <= $imax; $i++) {
        createAdrress($globaldata[$i]);
    }


    ?>
    <h1>L'enregistrement a ete un succes </h1>
    <h3>Merci</h3><br>
    <h3>Nous vous souhetons une bonne journee</h3>

    <br><br>
    <button><a href="../index.php">Acceuil</a></button>
</body>
</html>

