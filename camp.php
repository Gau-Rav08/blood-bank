
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Camp Information</title>
  </head>
  <body>
<?php include_once 'nav-bar.php'; 

include_once 'db.inc.php';

if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM camp WHERE campId = {$_REQUEST['campId']}";
  if(mysqli_query($conn, $sql)){
      echo "Record Deleted Successfully!!";
  }
  else{
      echo "ERROR! Unable to Delete record ";
  }
}

$sql2= "SELECT * FROM camp";
$result2 = mysqli_query($conn, $sql2);
if(mysqli_num_rows($result2) == 0) { echo 'No Camps for now!!';}
?>
    <div class="container" style="margin-top: 90px;">
      <table class="table table-condensed table-bordered table-hover table-dark">
      <thead>
          <tr>
              <th class="bg-info">Address</th>
              <th class="bg-info">Description</th>
              <th class="bg-info">Date</th>
              <th class="bg-info"> Time Period</th>                          
            <?php 
            if (isset($_SESSION["username"])){
              echo '<th class="bg-info">Action</th>';
            }
            ?>
          </tr>
      </thead>
      <tbody>
<?php 
      while($row = mysqli_fetch_assoc($result2)){
          echo '<tr>
                <td>'.$row["address"].'</td>
                <td>'.$row["description"].'</td>
                <td>'.$row["setupDate"].'</td>
                <td>'.$row["timeperiod"].'</td>';
          if (isset($_SESSION["username"])){
            echo '<form action="" method="POST"><input type="hidden" name="campId" value="'.$row["campId"].'">
            <td><input type="submit" class="btn btn-sm btn-danger" name="delete" value="delete"></td>
            </form>';
          }
        }                       
?>            
        </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  
  </body>
</html>