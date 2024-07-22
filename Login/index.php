<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "portal";

$con= new mysqli($serverName, $userName, $password, $dbName);

if($con->connect_error){
    die("connection failed : ".connect_error);
}

// $sql = "create table login_db
// (email_address varchar(20),
// password varchar(10))
// ";

// if($conn->query($sql)){
//     echo "table created successfully";
// }

?>