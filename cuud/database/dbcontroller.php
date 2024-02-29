<?php
$host = "localhost";
$userId = "beauuaj6";
$password = "1Q2W3e4r!";
$database = "beauuaj6_wnm608";

$link = mysqli_connect($host, $userId, $password, $database);

//check connection

if($link === false){
    
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}

    $sql = "CREATE TABLE IF NOT EXISTS products (
    id INT(11) NOT NULL PRIMARY KEY auto_increment,
    productName VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    size VARCHAR(255) NOT NULL,
    material VARCHAR(255) NOT NULL,
    image1 VARCHAR(255) NOT NULL,
    image2 VARCHAR(255) NOT NULL,
    image3 VARCHAR(255) NOT NULL
    
    )";

if (mysqli_query($link, $sql)){
    
}

else{
     echo "ERROR:Could not able to excute $sql. ". mysqli_error($link);
     }
?>