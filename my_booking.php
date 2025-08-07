<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Booking - Tripizo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center">

  <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Check Your Booking</h2>
    <form action="show_booking.php" method="POST" class="space-y-4">
      <label class="block text-gray-700 font-semibold">Phone Number</label>
      <input type="tel" name="phone" required
             placeholder="01XXXXXXXXX"
             class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-orange-400" />
      
      <button type="submit"
              class="w-full bg-orange-500 text-white py-3 rounded-lg font-bold hover:bg-orange-600 transition-colors">
        View Booking
      </button>
    </form>
  </div>

</body>
</html>

