<?php


include 'connect.php';


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$dob = $_POST['dob'];
$nid = $_POST['n_id'];
$permanent_address = $_POST['permanent_address'];
$current_address = $_POST['current_address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];



$query = "INSERT INTO user_info (
    full_name, email, phone_number, dob, n_id, permanent_address, 
    current_address, password , confirm_password) 
    VALUES  ('$full_name', '$email', '$phone_number', '$dob', '$nid', '$permanent_address', 
    '$current_address' ,'$password' ,'$confirm_password')";

$run = mysqli_query($conn, $query);


if ($run) {
  header("Location:index.php");
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
