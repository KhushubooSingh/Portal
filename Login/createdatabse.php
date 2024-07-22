<?php 
$serverName = "localhost";
$userName = "root";
$password = "";

$conn = new mysqli($serverName, $userName, $password);

if($conn->connect_error){
    die("connection failed :".connect_error);
}

// $sql = "create database portal";

// if($conn->query($sql)){
//     echo "databse created successfully";
// }

?>