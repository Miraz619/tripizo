<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'tripizo';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error)
    die('Connection failed: ' . $conn->connect_error);


$name = $conn->real_escape_string($_POST['contact_name']);
$phone = $conn->real_escape_string($_POST['contact_phone']);
$email = $conn->real_escape_string($_POST['contact_email']);
$location = $conn->real_escape_string($_POST['contact_location']);
$subject = $conn->real_escape_string($_POST['contact_subject']);
$message = $conn->real_escape_string($_POST['contact_message']);


$sql = "INSERT INTO contacts (name, phone, email, location, subject, message, status)
        VALUES ('$name', '$phone', '$email', '$location', '$subject', '$message', 'new')";


if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Thank you! Your message has been submitted.');
        window.location.href = 'contact.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
