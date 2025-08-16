<?php
session_start();
include 'connect.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password match in the database
    $query = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header("Location: index.html"); // Redirect to homepage or dashboard
        exit();
    } else {
        echo "<script>alert('Invalid email or password.'); window.location.href='Login.html';</script>";
        exit();
    }
} else {
    echo "<script>alert('Please fill in both fields.'); window.location.href='Login.html';</script>";
    exit();
}
?>