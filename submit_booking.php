<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tripizo';

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$car_type = $_POST['car_type'];
$pickup_date = $_POST['pickup_date'];
$pickup_location = $_POST['pickup_location'];


$check_sql = "SELECT * FROM bookings WHERE phone = '$phone' AND status != 'Cancelled'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
   
    echo "<script>
        alert('❌ This phone number has already booked. Only one active booking is allowed.');
        window.location.href = 'booking.php';
    </script>";
    exit;
}


$sql = "INSERT INTO bookings (name, phone, car_type, pickup_date, pickup_location)
        VALUES ('$name', '$phone', '$car_type', '$pickup_date', '$pickup_location')";

if ($conn->query($sql) === TRUE) {
    header("Location: thankyou.html"); 
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

