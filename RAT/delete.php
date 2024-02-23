<?php
include "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM records WHERE id = $id";
$result = mysqli_query($link, $sql);
$url = "records.php";
header("Location: " . $url);
exit(); 
?>

