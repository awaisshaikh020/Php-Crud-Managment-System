<?php
include "connection.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "DELETE FROM `data` WHERE id = $id";

    $result  = mysqli_query($conn, $query);
    if ($result) {
        echo "delete operation is successful";
        header("location:display.php");
    } else {
        echo " delete operation is not successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete.php</title>
</head>

<body>

</body>

</html>