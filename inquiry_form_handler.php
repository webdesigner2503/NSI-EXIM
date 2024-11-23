<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $category = htmlspecialchars($_POST['category']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Email recipient and subject
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Inquiry Form Submission";

    // Email content
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Number: $number\n";
    $body .= "Category: $category\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Inquiry sent successfully.";
    } else {
        echo "Inquiry failed to send.";
    }
} else {
    echo "Invalid request.";
}
