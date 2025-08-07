<?php
$conn = new mysqli("localhost", "root", "", "tripizo");


$phone = $_POST['phone'];


$result = $conn->query("SELECT * FROM bookings WHERE phone = '$phone' AND status != 'Cancelled'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Booking - Tripizo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl">
  <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Your Booking Information</h2>

  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="mb-6 border border-gray-300 p-4 rounded-lg bg-gray-50 shadow">
        <p><strong>Name:</strong> <?= $row['name'] ?></p>
        <p><strong>Phone:</strong> <?= $row['phone'] ?></p>
        <p><strong>Car Type:</strong> <?= $row['car_type'] ?></p>
        <p><strong>Pickup Date:</strong> <?= $row['pickup_date'] ?></p>
        <p><strong>Pickup Location:</strong> <?= $row['pickup_location'] ?></p>
        <p><strong>Status:</strong> <?= isset($row['status']) ? $row['status'] : 'Pending' ?></p>

        
        <div class="flex gap-4 mt-4">
        
          <form action="cancel_booking.php" method="POST">
            <input type="hidden" name="booking_id" value="<?= $row['id'] ?>">
            <button type="submit"
                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors">
              Cancel Booking
            </button>
          </form>

          
          <form action="update_booking.php" method="GET">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
              Update Booking
            </button>
          </form>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p class="text-red-500 font-semibold text-center">No booking found for this number.</p>
  <?php endif; ?>
</div>

</body>
</html>
