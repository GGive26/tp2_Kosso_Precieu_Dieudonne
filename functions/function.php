<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
</head>
<body>
<div class="sender">
<?php 
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1_tp2";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    //echo "Connected to the $db database successfully";
    global $conn;
    session_start();
    $_SESSION['connexion']= $conn;
} else {
    echo "Error : Not connected to the $db database";
}
if(isset($_SESSION['imax'])){
    $imax=intval($_SESSION['imax']);
};


function createAdrress(array $data)
{
    global $conn;

    $query = "INSERT INTO address VALUES (NULL, ?, ?, ?,?,?)";
    if ($stmt = mysqli_prepare($conn, $query)) {
         
        mysqli_stmt_bind_param(
            $stmt,
            "sisss",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode']
        );
        $result = mysqli_stmt_execute($stmt);
    }
}
function deleteAllAddress(int $imax)
{
    global $conn;
    $i=1;
    while($i<=$imax){
    $query = "DELETE FROM address
                WHERE address.id =$i;";
        $stmt = mysqli_prepare($conn, $query);

        $result = mysqli_stmt_execute($stmt);
        $i++;
    }
}


?>
</div>
</body>
</html>

