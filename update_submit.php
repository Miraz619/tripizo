<?php
$conn = new mysqli("localhost", "root", "", "tripizo");

$id = $_POST['id'];
$name = $_POST['name'];
$car_type = $_POST['car_type'];
$pickup_date = $_POST['pickup_date'];
$pickup_location = $_POST['pickup_location'];

$sql = "UPDATE bookings 
        SET name = '$name', car_type = '$car_type', pickup_date = '$pickup_date', pickup_location = '$pickup_location' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('✅ Booking updated successfully.');
        window.location.href = 'my_booking.php';
    </script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
