<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display.php</title>
    <!-- bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- jQuery cdn link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- jQuery app.js link -->
    <script src="app.js"></script>
</head>

<body>

    <div class="section">
        <div class="container">
            <!-- button -->
            <a href="Create.php">
                <div class="btn btn-secondary m-5 px-5">Add Employee Data</div>
            </a>
            <h1 class="text-center py-2"><span class="heading">EMPLOYEE DATA</span></h1>
            <br><br>
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">

                    <!-- Search button -->
                    <form class="d-flex">
                        <input class="form-control me-2 justify-content-start" type="search" placeholder="search" aria-label="Search" id="search">
                        <button class="btn btn-outline-success me-2" type="submit" id="search_btn">Search</button>

                        <!-- rest-button -->
                        <a href="display.php" class="btn btn-outline-danger">Reset</a>
                    </form>
                </div>
            </div>
            <!-- table -->
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr class="text-center bg-dark text-white">
                        <th scope="col">ID</th>
                        <th scope="col">FIRST NAME</th>
                        <th scope="col">MIDDLE NAME</th>
                        <th scope="col">LAST NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">UPDATE</th>
                        <th scope="col">DELETE</th>


                    </tr>
                </thead>
                <tbody id="myTable">

                    <?php

                    // we can apply limit,e.g/ i want to just 100 person data in 1 page
                    // $query = "SELECT * FROM `data` LIMIT 5";

                    // ORDER BY `First Name` ASC {use by A to z}-> we can convert First Name to user id {1 to 10..} etc but remember you can write only data base table name . 

                    // Asc -->  Asscending order
                    // DESC --> Decending order

                    $query = "SELECT * FROM `data` ORDER BY `First Name` ASC";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        // mysqli fetch array  k function result ko array or list me convert krk {$row} k variable me store krta hy

                        $row = mysqli_fetch_array($result);
                        while ($row = mysqli_fetch_array($result)) {

                            // data table ki headings ka name aiga

                            $id = $row['Id'];
                            $f_name = $row['First Name'];
                            $m_name = $row['Middle Name'];
                            $l_name = $row['Last Name'];
                            $email = $row['Email Address'];
                            $password = $row['password'];


                            // print or echo

                            echo '<tr class="text-center">
                            <th scope="row">' . $id . '</th>
                            <td>' . $f_name . '</td>
                            <td>' . $m_name . '</td>
                            <td>' . $l_name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $password . '</td>

                            <td>  
                            <a href="update.php? updateid=' . $id . '" class="text-light btn btn-primary">Update</a>
                           </td>
                           
                           <td>
                           <a href="delete.php? deleteid=' . $id . '" class="text-light btn btn-danger">Delete</a>
                           </td>

                            </tr>';
                        }
                    }

                    ?>


                </tbody>
            </table>

        </div>

    </div>


    <!-- Bootstrap 5 js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>