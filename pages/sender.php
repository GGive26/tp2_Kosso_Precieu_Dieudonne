<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/monstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sender</title>
</head>

<body>
    <?php

    require('../functions/function.php');
    if (isset($_SESSION['data']) || isset($_SESSION['imax'])) {
        $globaldata = $_SESSION['data'];
        $imax = intval($_SESSION['imax']);
        echo $imax;
        var_dump($globaldata);
    }

    for ($i = 1; $i <= $imax; $i++) {
        createAdrress($globaldata[$i]);
    }


    ?>
</body>

</html>