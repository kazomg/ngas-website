<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ngasgarage01@gmail.com"; // replace with your email
    $subject = "New Spare Part Request from " . $_POST['name'];

    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";
    $message .= "Vehicle: " . $_POST['vehicle'] . "\n";
    $message .= "Part Description: " . $_POST['partdesc'] . "\n";

    $headers = "From: noreply@ngas.com\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you! Your request has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your request. Please try again later.</h2>";
    }
}
?>
 