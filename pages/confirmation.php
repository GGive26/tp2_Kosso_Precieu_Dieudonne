<?php

$infos=$_POST;
echo"<form action='sender.php'>";
if(count($infos)>0){
    foreach($infos as $key => $value){
    echo"<input type='text' id='$key' value='$value' readonly /><br>";
}
}

echo"<input type='submit' value='confirmer' >";
?>
<a href="./sender.php"
<?php
echo"</form>";
if(isset($_POST)){
    for ($i=1; $i<=$imax ; $i++) { 
        $data[$i]=[
            "street"=>$_POST["street$i"],
            "street_nb"=>$_POST["street_nb$i"],
            "type"=>$_POST["type$i"],
            "city"=>$_POST["city$i"],
            "zipcode"=>$_POST["zipcode$i"]
        ];
        var_dump($data[$i]);
    }
}



?>