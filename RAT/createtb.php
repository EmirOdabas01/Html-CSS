<?php

$link = mysqli_connect("localhost", "root", "", "rat");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$sql = "CREATE TABLE records (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
phone VARCHAR(70) NOT NULL UNIQUE,
messagee VARCHAR(100),
dateofbirth DATE,
gender VARCHAR(10)
)";

mysqli_query($link, $sql);

mysqli_close($link);
?>