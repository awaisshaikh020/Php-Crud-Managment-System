<!-- step 1 -->
// 1 -> create CONNECTION in data-base.
<!-- connection.php -->



<!-- step 2 -->
// 1 -> create FORM in html.

// 2 -> include "connection.php";

// 3 -> FORM -> declare method -> [$_post] or [$_Get] -> post is secure and get is unsecure because get show the all data on url.

// 4 -> Naming in input field -> name = $name; || email = $email and specially button name is btn or submit. 

// 5 -> which create data-base and check how many fields in data base like first name & last name & email & password & contact number.

// 6 -> we create isset method and those variables will in data-base-> 
if (isset($_POST['submit'])) {
    $f_name = clean_input($_POST['f_name']);
    $m_name = clean_input($_POST['m_name']);
    $l_name = clean_input($_POST['l_name']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
}

// 7 -> we create function who can be clean garbage values ->
function clean_input($field)
{
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field); 
    return $field;
}

// 8 -> we create query " ";
->  data base -> sql -> insert query and just we will be remove id and value 1.

// 9 -> we create mysqli_query
    Data execute to mysqli_query
    $data = mysqli_query($conn, $query);

// 10 -> check condition 
if ($data) {
        echo " <script> alert('Data inserted  !!!  Thank you so much') 
    window.location.href = 'display.php'; 
    </script>";
    } else {
        echo " Data not inserted";
    }
     or
     we can use if we would like to when page reload so where is open my new page 
     -> -> header("location:display.php");
<!-- create.php -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<!-- step 3 -->
<!-- Display.php -->
// 1. -> Add include file
// 2. -> we create TABLE in html , we can take html table to bootstrap.
// 4. ->   Here create headings your requirments
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


 // 5. -> we will create <tbody> in PHP-TAG <?php ?>
 // 6. -> we will create $query = " ";
 
 $query = "SELECT * FROM `data` ORDER BY `First Name` ASC";
                    $result = mysqli_query($conn, $query);
                    we have some rules in query -> -> -> 

                    // we can apply limit,e.g/ i want to just 100 person data in 1 page
                    // $query = "SELECT * FROM `data` LIMIT 5";

                    // ORDER BY `First Name` ASC {use by A to z}-> we can convert First Name to user id {1 to 10..} etc but remember you can write only data base table name . 

                    // Asc ->  Asscending order
                    // DESC -> Decending order


// 7. -> then,
if ($result) {
                        -> mysqli fetch array  k function result ko array or list me convert krk {$row} k variable me store krta hy

                        $row = mysqli_fetch_array($result);
                        while ($row = mysqli_fetch_assoc($result)) {

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


                    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

 <!-- step 4 -->
<!-- UPDATE.PHP -->

// 1. -> Add inclue file.
// 2. -> create or copy html form in display.php & we will button name SUMBIT convert to UPDATE.
// 3. -> create value in html form
value="<?php echo $f_name; ?>"

// 4. -> copy and past display.php work or code
function clean_input($field)
{
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}


 <!-- we created button in display.php and this button name is update so,id se hum get karahy hy or yeah id ko url me lara hy jbh url se fetch krny k liye get k method use kra hy. -->
$id = $_GET['updateid']; 


<!-- here is select new query or display.php query but just will be add is where id=$id -->
$query = "SELECT `Id`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `password` FROM `data` where id=$id";


<!--  show karana hy jab edit krty hy to old data show huta hy to usko update krty hy. -->
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$f_name = $row['First Name'];
$m_name = $row['Middle Name'];
$l_name = $row['Last Name'];
$email = $row['Email Address'];
$password = $row['password'];

// 5. -> copy past display.php 
<!--  click to submit button -->
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



<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<!-- step 5 -->
<!-- Delete.php -->

// 1. -> add include file
// 2. -> we create isset method and delete button
if (isset($_GET['deleteid'])) --------> yeah delete k button hy jab bh click huga to usk andr k method chlyga.

// 3. -> get value url and delete
$id = $_GET['deleteid'];
------> deleteid yeah wo hy ju display.php me delete k button ko id de the or wo url me arahi phr isko get k method se fetch kara hy.

// 4. -> create query
$query = "DELETE FROM `data` WHERE id = $id";

// 5. -> check condition
$result  = mysqli_query($conn, $query);
    if ($result) {
        echo "delete operation is successful";
        header("location:display.php");
    } else {
        echo " delete operation is not successful";
    }

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
jQuery code
------->   (agr <form></form> deya hu to yeah use krngye or 1. <tbody> k andr id dengye id = "mytable" or 2.jquery k cdn dena huga or 3. btn ko name or input ko bh name dena huga).
or 
agr (<form></form>  yeah na hu to or short code likkh skty hy)
-> <script>
    $(document).ready(function() {
        $("#search_btn").click(function(event) {
            event.preventDefault(); // Prevent the form from being submitted

            var value = $("#search").val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>


8

// jquery code -> data filter
$(document).ready(function () {
    $("#search_btn").click(function (event) {
        event.preventDefault(); // Prevent the form from being submitted

        var value = $("#search").val().toLowerCase();
        var $tableRows = $("#myTable tr");

        $tableRows.hide(); // Hide all table rows initially

        $tableRows.filter(function () {
            return $(this).text().toLowerCase().indexOf(value) > -1;
        }).show();

        // Display "No record found" message if no rows match the search
        if ($tableRows.filter(":visible").length === 0) {
            $("#noRecordFound").show();
        } else {
            $("#noRecordFound").hide();
        }
    });
});

<!-- or with -->
<div id="noRecordFound" style="display: none;">No record found</div>

