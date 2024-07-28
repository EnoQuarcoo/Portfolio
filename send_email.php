<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "enobempah2002@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message\n";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "<p>Thank you for your message! We will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
}
?>
