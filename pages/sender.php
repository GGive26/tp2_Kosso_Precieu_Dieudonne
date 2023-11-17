<?php
require_once('../functions/function.php');
require_once('./confirmation.php');
session_start();
if(isset($_SESSION['imax'])){
    $imax=intval($_SESSION['imax']);
    echo$imax;
};

for ($i=1; $i <$imax ; $i++) { 
    createAdrress($data[$i]);
};


?>