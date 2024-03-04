<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
@$productid = $_POST['productid'];
@$artisanid = $_POST['artistid'];
@$title=$_POST['title'];
@$price = $_POST['price'];
@$avalibility = $_POST['avalibility'];


// SQL to insert data into database
$sql = "INSERT INTO productdetails(productid,artisanid ,title, price,avalibility)
VALUES ('$productid', '$artisanid','$title', '$price',' $avalibility')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
   

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


     ?>
    