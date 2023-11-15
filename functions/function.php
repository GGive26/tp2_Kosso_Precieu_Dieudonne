<?php 
function createUser(array $data)
{
    global $conn;

    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $query)) {
         
        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $data['user_name'],
            $data['email'],
            $data['pwd']
        );
        $result = mysqli_stmt_execute($stmt);
    }
}
function getAllUsersAssoc()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user");

    $data = [];
    $i = 0;
    while ($rangeeData = mysqli_fetch_assoc($result)) {
        $data[$i] = $rangeeData;
        $i++;
    };

    return $data;
}
function deleteUser(int $id)
{
    global $conn;

    $query = "DELETE FROM user
                WHERE user.id = ?;";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id,
        );

        $result = mysqli_stmt_execute($stmt);
    }
}

?>