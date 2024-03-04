<?php
// Database connection
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
@$name = $_POST['name'];
@$email = $_POST['email'];
@$contact = $_POST['contact'];
@$address = $_POST['address'];


// SQL to insert data into database
$sql = "INSERT INTO orderdlist(name, email, contact, address)
VALUES ('$name', '$email', '$contact',' $address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
