<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection setup
$host = 'localhost';
$user = 'root';
$password = ''; // default for XAMPP
$database = 'tripizo';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error)
    die('Connection failed: ' . $conn->connect_error);

// Collect and sanitize POST data
$name = $conn->real_escape_string($_POST['contact_name']);
$phone = $conn->real_escape_string($_POST['contact_phone']);
$email = $conn->real_escape_string($_POST['contact_email']);
$location = $conn->real_escape_string($_POST['contact_location']);
$subject = $conn->real_escape_string($_POST['contact_subject']);
$message = $conn->real_escape_string($_POST['contact_message']);

// Corrected table name: contacts
$sql = "INSERT INTO contacts (name, phone, email, location, subject, message)
        VALUES ('$name', '$phone', '$email', '$location', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Thank you! Your message has been submitted.');
        window.location.href = 'contact.html';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
