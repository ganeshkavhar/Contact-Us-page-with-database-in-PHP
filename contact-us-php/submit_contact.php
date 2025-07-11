<?php
include 'includes/db.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if ($name && $email && $message) {
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Thank you for your message!";
    } else {
        echo "Something went wrong. Please try again.";
    }

    $stmt->close();
} else {
    echo "All fields are required.";
}

$conn->close();
?>
<br><a href="contact.php">Back to Contact Form</a>