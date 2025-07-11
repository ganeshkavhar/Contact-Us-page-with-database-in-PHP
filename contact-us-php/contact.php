<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form { max-width: 500px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin-top: 10px; }
        button { padding: 10px 20px; margin-top: 10px; }
    </style>
</head>
<body>
<h2>Contact Us</h2>
<form method="POST" action="submit_contact.php">
    <label>Name:</label><br>
    <input type="text" name="name" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Message:</label><br>
    <textarea name="message" required></textarea><br>

    <button type="submit">Send Message</button>
</form>
</body>
</html>