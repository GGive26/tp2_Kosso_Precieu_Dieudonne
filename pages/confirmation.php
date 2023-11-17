<?php
require_once('../functions/function.php');
if(isset($_SESSION['imax'])){
    $imax=intval($_SESSION['imax']);
    echo$imax;
};


$infos=$_POST;
global $infos;
echo"<form method='post' action='../index.php' >";
if(count($infos)>0){
    foreach($infos as $key => $value){
    echo"<input type='text' id='$key' value='$value' readonly /><br>";
}
}


if(isset($_POST)){
    for ($i=1; $i<=$imax ; $i++) { 
        $data[$i]=[
            "street"=>$infos["street$i"],
            "street_nb"=>$infos["street_nb$i"],
            "type"=>$infos["type$i"],
            "city"=>$infos["city$i"],
            "zipcode"=>$infos["zipcode$i"]
        ];
        createAdrress($data[$i]);
        //var_dump($data[$i]);
    }
}

?>
<button ><a href="./sender.php">confirmer</button>
<?php 
echo"</form>";
?>
<input type="submit"  onclick="deleteAllAdrress($imax)" value="Annuler" >
