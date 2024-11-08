<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "You have received a new message from $name.\n\n".
            "Email: $email\n\n".
            "Message: \n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message! We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, there was an error submitting your message. Please try again later.</p>";
    }
}
?>
