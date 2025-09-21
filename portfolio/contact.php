<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    if ($name && $email && $message) {
        // Here you would normally send an email or store the message
        echo "Thank you, $name! Your message has been received.";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}
