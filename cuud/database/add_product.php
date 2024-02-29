<?php

$prodname = $_POST["productName"];
$price = $_POST["price"];
$description = $_POST["description"];
$color = $_POST["color"];
$size = $_POST["size"];
$material = $_POST["material"];
$image1 = $_POST["image1"];
$image2 = $_POST["image2"];
$image3 = $_POST["image3"];

include('dbcontroller.php');

$sql = "INSERT INTO products (productName, price, description, color, size, material, image1, image2, image3) VALUES('$prodname', '$price','$description','$color','$size','$material','$image1','$image2','$image3')";

if(mysqli_query($link,$sql)){
    
    //Close connection
    mysqli_close($link);
    
    include('db.php');
    
} 

else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

    