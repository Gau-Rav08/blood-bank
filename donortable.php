
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Donor Information</title>
  </head>
  <body>
<?php include_once 'nav-bar.php';

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bbm";

//create connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//check connection
if(!$conn){
    die("Connection Failed");        
}

//sql to delete record
if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM donor WHERE donorid = {$_REQUEST['donorid']}";
    if(mysqli_query($conn, $sql)){
        echo " Record Deleted Successfully!!";
    }
    else{
        echo "ERROR! Unable to Delete record ";
    }
}

?>
    <div class="container">
        <?php
            $sql= "SELECT * FROM donor";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
               echo(' <br><br>
                    <table class="table table-condensed table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th class="bg-info">Donor Id</th>
                            <th class="bg-info">Name</th>
                            <th class="bg-info">Gender</th>
                            <th class="bg-info">Age</th>
                            <th class="bg-info">Blood Group</th>
                            <th class="bg-info">Address</th>
                            <th class="bg-info">Contact No.</th>
                            <th class="bg-info">Email Id</th>                            
                            <th class="bg-info">Action</th>
                        </tr>
                    </thead>
                    <tbody>
               ');
               while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row["donorid"] . "</td>";
                echo "<td>" . $row["fullname"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["agelimit"] . "</td>";
                echo "<td>" . $row["bloodgroup"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["contactno"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo '<td><form action="" method="POST"><input type="hidden" name="donorid" value=' . $row['donorid'] . '>
                <input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';                  
               }
            } else {
                echo "0 Results";
            }
        ?>
        </tbody>
        </table>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"]></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    
    
  </body>
</html>