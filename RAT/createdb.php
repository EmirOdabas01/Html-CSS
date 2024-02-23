<?php

$link = mysqli_connect("localhost", "root", "");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$sql = "CREATE DATABASE rat";
mysqli_query($link, $sql); 
mysqli_close($link);
?>