<?php 
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1_tp2";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
    global $conn;
    session_start();
    $_SESSION['connexion']= $conn;
} else {
    echo "Error : Not connected to the $db database";
} 


function createAdrress(array $data)
{
    global $conn;

    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?,?,?)";
    if ($stmt = mysqli_prepare($conn, $query)) {
         
        mysqli_stmt_bind_param(
            $stmt,
            "issss",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode']
        );
        $result = mysqli_stmt_execute($stmt);
    }
}

?>