<?php
require_once('../functions/function.php');
if(isset($_SESSION['imax'])){
    $imax=intval($_SESSION['imax']);
};
?>
<?php
$infos=$_POST;

echo"<form method='post' action='./sender.php' >";
if(count($infos)>0){
    foreach($infos as $key => $value){
    echo"<input type='text' id='$key' value='$value' readonly /><br>";
}
}


if(isset($_POST)){
    for ($i=1; $i<=$imax ; $i++) { 
        $data=[
            "street"=>$infos["street$i"],
            "street_nb"=>$infos["street_nb$i"],
            "type"=>$infos["type$i"],
            "city"=>$infos["city$i"],
            "zipcode"=>$infos["zipcode$i"]
        ];
        $globaldata[$i]=$data;
        
    }
}
$_SESSION['data']=$globaldata;
var_dump($globaldata);
?>
<input type="submit" value="confirmer">
<?php 
echo"</form>";
?>
<button><a href="../index.php">annuler</a></button>
</body>
</html>