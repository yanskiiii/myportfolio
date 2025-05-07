<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format']);
        exit;
    }

    // Set up email
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body
    $email_body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br($message) . "</p>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you for your message. We will get back to you soon!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Sorry, there was an error sending your message. Please try again later.']);
    }
} else {
    // Not a POST request
    header("HTTP/1.0 403 Forbidden");
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?> 