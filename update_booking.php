<?php
$conn = new mysqli("localhost", "root", "", "tripizo");
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM bookings WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-lg">
    <h2 class="text-2xl font-bold text-center mb-6">Update Your Booking</h2>

    <form action="update_submit.php" method="POST" class="space-y-4">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">

      <div>
        <label class="block font-semibold text-gray-700">Your Name</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" class="w-full px-4 py-2 border rounded">
      </div>

      <div>
        <label class="block font-semibold text-gray-700">Phone</label>
        <input type="tel" name="phone" value="<?= $row['phone'] ?>" class="w-full px-4 py-2 border rounded" readonly>
      </div>

      <div>
        <label class="block font-semibold text-gray-700">Car Type</label>
        <select name="car_type" class="w-full px-4 py-2 border rounded">
          <option <?= $row['car_type'] === 'Sedan' ? 'selected' : '' ?>>Sedan</option>
          <option <?= $row['car_type'] === 'SUV' ? 'selected' : '' ?>>SUV</option>
          <option <?= $row['car_type'] === 'Microbus' ? 'selected' : '' ?>>Microbus</option>
          <option <?= $row['car_type'] === 'Pickup' ? 'selected' : '' ?>>Pickup</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold text-gray-700">Pickup Date</label>
        <input type="date" name="pickup_date" value="<?= $row['pickup_date'] ?>" class="w-full px-4 py-2 border rounded">
      </div>

      <div>
        <label class="block font-semibold text-gray-700">Pickup Location</label>
        <input type="text" name="pickup_location" value="<?= $row['pickup_location'] ?>" class="w-full px-4 py-2 border rounded">
      </div>

      <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-bold hover:bg-orange-600">
        Update Booking
      </button>
    </form>
  </div>
</body>
</html>
