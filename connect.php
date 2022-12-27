<?php
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $agelimit = $_POST['agelimit'];
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];

    //database connection
    $conn = new mysqli('localhost','root','','bbm');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into donor(fullname, gender, agelimit, bloodgroup, address, contactno, email)
        values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss",$fullname, $gender, $agelimit, $bloodgroup, $address, $contactno, $email);
        $stmt->execute();
        echo "Registration Successfully Done!!";
        $stmt->close();
        $conn->close();
        header('index.php');
        exit();
    }
?>