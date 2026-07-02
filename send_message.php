<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "tshepangramohapidevs@gmail.com";
    $headers = "From: $email\r\n";
    $body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if(mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your message has been sent successfully.</h2>";
        echo "<a href='index.html'>Return to Home</a>";
    } else {
        echo "<h2>Sorry, there was an error sending your message. Please try again later.</h2>";
    }
}
?>
