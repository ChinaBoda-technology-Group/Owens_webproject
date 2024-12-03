<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you can send the form data to an email or store it in a database
    echo "Thank you for contacting Owen Car Batteries, $name. We will get back to you soon!";
}
?>
