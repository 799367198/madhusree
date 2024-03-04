<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
@$name = $_POST['name'];
@$email = $_POST['email'];
@$password=$_POST['password'];
@$contact = $_POST['contact'];
@$address = $_POST['address'];
@$select=$_POST['select'];

// SQL to insert data into database
$sql = "INSERT INTO registration(name, email,password, contact, address,typeofuser)
VALUES ('$name', '$email','$password', '$contact',' $address','$select')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
