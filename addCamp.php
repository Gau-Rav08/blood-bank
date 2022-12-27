<?php

$description = $_POST['description'];
$date = $_POST['date'];
$address = $_POST['address'];
$timeperiod = $_POST['starttime'].' to '.$_POST['endtime'];

include_once 'db.inc.php';

$stmt = $conn->prepare("INSERT INTO camp(setupDate, timeperiod, address, description) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $date, $timeperiod, $address, $description);
$stmt->execute();
$stmt->close();
$conn->close();
header('location: ./camp.php');

?>