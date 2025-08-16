<?php


include 'connect.php';


    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $dob = $_POST['dob'];
    $n_id = $_POST['n_id'];
    $permanent_address = $_POST['permanent_address'];
    $current_address = $_POST['current_address'];

   $query = "UPDATE user_info SET 
        full_name='$full_name', 
        email='$email', 
        phone_number='$phone_number', 
        dob='$dob', 
        n_id='$n_id', 
        permanent_address='$permanent_address', 
        current_address='$current_address' 
        WHERE id='$id'";

    $run = mysqli_query($conn, $query);

    if ($run) {
        header("Location: Profile.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }