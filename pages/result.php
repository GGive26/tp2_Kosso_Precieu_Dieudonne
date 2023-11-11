
<head>
    <link rel="stylesheet" href="../style/monstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="affichage2">
    <?php
    //j'effectue ma premiere  validation qui verras si l'element envoyer et un entier
    if(is_numeric($_POST['Nb_adresse'])){
        echo"bonjour";
    }else{
        echo"echouer";
    }
    echo"<br><br>";
    //var_dump($_POST['Nb_adresse']);
    
    
    ?>
</body>
