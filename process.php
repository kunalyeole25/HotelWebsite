<?php
$db_host = 'database.cgmcmr4glqgi.eu-north-1.rds.amazonaws.com';
$db_username = 'root';
$db_password = 'root1234';
$db_name = 'database';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['Name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
