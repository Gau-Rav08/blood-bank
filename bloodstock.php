
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Bloodstock Information</title>

    <style>
        .button {
        background-color: #cf2c26;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;        
        border-radius: 30px; 
        position: absolute;
        left:45%;
        }
    </style>
  </head>
  <body>
<?php 
include_once 'nav-bar.php'; 
include_once 'db.inc.php';
?>
  <div class="container">
        <?php
        
        
        if(isset($_REQUEST['delete'])){
            $sql = "DELETE FROM stock WHERE sampleId = {$_REQUEST['sampleid']}";
            if(mysqli_query($conn, $sql)){
                echo " Record Deleted Successfully!!";
            }
            else{
                echo "ERROR! Unable to Delete record ";
            }
        }
        
        $sql= "SELECT * FROM stock";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
               echo(' <br><br>
                    <table class="table table-condensed table-bordered table-hover table-active ">
                    <thead>
                        <tr>
                            <th class="bg-danger">Sample Id</th>
                            <th class="bg-danger">Donated Date</th>                            
                            <th class="bg-danger">Blood Group</th>
                            <th class="bg-danger">Complication</th>
                            <th class="bg-danger">Operation</th>
                            
                        </tr>
                    </thead>
                    <tbody>
               ');
               while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row["sampleid"] . "</td>";
                echo "<td>" . $row["donated_date"] . "</td>";
                echo "<td>" . $row["bloodgroup"] . "</td>";
                echo "<td>" . $row["complication"] . "</td>";                
                echo '<td><form action="" method="POST"><input type="hidden" name="sampleid" value=' . $row['sampleid'] . '>
                <input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
                                
               }
            } else {
                echo "0 Results";
            }
        ?>
        </tbody>
        </table>
    </div>
    <button class="button button2" onclick="location.href='add.php';">+ Add</button>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    
  </body>
</html>