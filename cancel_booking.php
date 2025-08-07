<?php
$conn = new mysqli("localhost", "root", "", "tripizo");
$booking_id = $_POST['booking_id'];


$conn->query("UPDATE bookings SET status = 'Cancelled' WHERE id = $booking_id");

header("Location: my_booking.php");
exit;
?>
