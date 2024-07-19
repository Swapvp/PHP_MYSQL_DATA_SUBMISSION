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

$success = false;
if ($stmt->execute()) {
    $success = true;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submission Status</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($success): ?>
            <div class="success-message">
                Your data has been submitted successfully.
            </div>
        <?php else: ?>
            <div class="error-message">
                There was an error submitting your data. Please try again.
            </div>
        <?php endif; ?>
        <a href="index.php" class="back-link">Back to form</a>
    </div>
</body>
</html>
