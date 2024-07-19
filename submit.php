<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_form";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$stmt = $conn->prepare("INSERT INTO users (name, phone, email) VALUES (?, ?,  ?)");
$stmt->bind_param("sss", $name, $phone,  $email);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

