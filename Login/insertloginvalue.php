<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "portal";

$conn= new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die("connection failed : ".connect_error);
}

$sql = " insert into login_db (email_address, password) values
('admin123@gmail.com', '12345')
";

if($conn->query($sql)){
    echo "data inserted successfully";
}