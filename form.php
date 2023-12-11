<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $service = $_POST["service"];
    $note = $_POST["note"];

    $to = "ahmed.hashad@outlook.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nMobile: $mobile\nService: $service\nNote: $note";

    mail($to, $subject, $message);

    // Redirect to a thank you page or back to the form page
    header("Location: thank_you.html");
    exit();
}
?>
