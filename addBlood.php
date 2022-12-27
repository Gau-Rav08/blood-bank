<?php
$donated_date = $_POST['donated_date'];    
$bloodgroup = $_POST['bloodgroup'];
$complication = null;
$complication = $_POST['complication'];

//database connection
$conn = new mysqli('localhost','root','','bbm');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into stock(donated_date, bloodgroup, complication)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$donated_date, $bloodgroup, $complication);
    $stmt->execute();
    echo "Registration Successfully Done!!";
    $stmt->close();
    $conn->close();
}
?>
