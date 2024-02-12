<?php
include "connection.php";
function clean_input($field)
{
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}
// show karana hy jab edit krty hy to old data show huta hy to usko update krty hy

$id = $_GET['updateid'];
$query = "SELECT `Id`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `password` FROM `data` where id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$f_name = $row['First Name'];
$m_name = $row['Middle Name'];
$l_name = $row['Last Name'];
$email = $row['Email Address'];
$password = $row['password'];


// click to update button
if (isset($_POST['Update'])) {


    $f_name = clean_input($_POST['f_name']);
    $m_name = clean_input($_POST['m_name']);
    $l_name = clean_input($_POST['l_name']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    // data base -> sql -> update query 
    // last me where id = $id huga
    $query = "UPDATE `data` SET `Id`='$id',`First Name`='$f_name',`Middle Name`='$m_name',`Last Name`='$l_name',`Email Address`='$email',`password`='$password' WHERE id = $id";

    // data execute karta hy mysqli_query
    $result = mysqli_query($conn, $query);
    if ($result) {

        echo "Update operation is successful";
        header("location:display.php");
    }
    echo " update operation is not successful";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create.php</title>
    <!-- bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <!-- button -->
                <a href="display.php">
                    <div class="btn btn-secondary m-5 px-5">Back</div>
                </a>
                <div class="col-6 offset-3">
                    <h1 class="text-center mt-5 mb-5 bg-success text-white">UPDATE EMPLOYEE DATA</h1>
                    <form action="#" method="post">

                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">First Name</label>
                            <input type="text" name="f_name" value="<?php echo $f_name; ?>" class="form-control" id="validationCustom02" placeholder="First Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Middle Name</label>
                            <input type="text" name="m_name" class="form-control" value="<?php echo $m_name; ?>" id="validationCustom02" placeholder="Middle Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Last Name</label>
                            <input type="text" name="l_name" value="<?php echo $l_name; ?>" class="form-control" id="validationCustom02" placeholder="Last Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" placeholder="xyz@gmail.com" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <button type="submit" name="Update" value="insert" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5 js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>