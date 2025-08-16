<?php
session_start();
include 'connect.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: Login.html");
    exit();
}

// Get the logged-in user's email
$email = $_SESSION['email'];


// Fetch user data by email
$result = mysqli_query($conn, "SELECT * FROM user_info WHERE email='$email' LIMIT 1");
$user = mysqli_fetch_assoc($result);

// Fetch booking data by email
$phone = $user['phone_number'];
$booking_result = mysqli_query($conn, "SELECT * FROM bookings WHERE phone='$phone' AND status != 'Cancelled'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - Tripizo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            background: #f3f4f6;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 0.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar h1 {
            font-size: 1.2rem;
            font-weight: bold;
            color: #000000ff;
            display: flex;
            align-items: center;
        }
        .navbar h1 i {
            margin-right: 8px;
            color: #070000ff;
        }
        .navbar .nav-links a {
            margin: 0 1rem;
            font-weight: bold;
            color: #374151;
            text-decoration: none;
            transition: color 0.2s;
        }
        .navbar .nav-links a:hover {
            color: #ef4444;
        }
        .navbar .profile-btn {
            margin-left: 2rem;
        }
        .navbar .profile-btn a {
            background: #3b82f6;
            color: #fff;
            padding: 0.5rem 1.5rem;
            border-radius: 999px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.2s;
        }
        .navbar .profile-btn a:hover {
            background: #ef4444;
        }
        .profile-bg {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e0e7ff 0%, #f3f4f6 100%);
            padding: 40px 0;
        }
        .profile-container {
            width: 100%;
            max-width: 520px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.10);
            padding: 40px 32px;
            margin: 0 auto;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 24px;
        }
        .profile-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: #3b82f6;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2em;
            font-weight: bold;
            margin: 0 auto 14px auto;
            box-shadow: 0 2px 8px rgba(59,130,246,0.15);
            letter-spacing: 2px;
            user-select: none;
        }
        .profile-title {
            font-size: 1.7em;
            color: #2563eb;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .profile-info {
            margin-top: 16px;
        }
        .profile-info label {
            font-weight: bold;
            color: #374151;
            display: block;
            margin-top: 14px;
            font-size: 1.05em;
        }
        .profile-info span {
            color: #6b7280;
            display: block;
            margin-top: 2px;
            font-size: 1em;
            word-break: break-word;
        }
        .profile-info a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: bold;
        }
        .booking-table {
            margin-top: 40px;
            width: 100%;
            border-collapse: collapse;
        }
        .booking-table th, .booking-table td {
            border: 1px solid #e5e7eb;
            padding: 10px 8px;
            text-align: left;
        }
        .booking-table th {
            background: #3b82f6;
            color: #fff;
            font-weight: bold;
        }
        .booking-table tr:nth-child(even) {
            background: #f3f4f6;
        }
        .booking-table tr:hover {
            background: #e0e7ff;
        }
        .no-booking {
            color: #ef4444;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1><i class="fas fa-car"></i>Tripizo</h1>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="#">Vehicles</a>
            <a href="details.html">Details</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="profile-btn">
            <a href="Profile.php">Profile</a>
        </div>
    </div>



    
    <div class="profile-bg">
        <div class="profile-container">
            <div class="profile-header">
                <?php
                    $initials = isset($user['full_name']) ? strtoupper(substr($user['full_name'], 0, 2)) : '';
                ?>
                <div class="profile-avatar">
                    <?php echo $initials; ?>
                </div>
                <div class="profile-title"><?php echo htmlspecialchars($user['full_name']); ?></div>
            </div>
            <div class="profile-info">
                <label>Email Address</label>
                <span><?php echo htmlspecialchars($user['email']); ?></span>
                <label>Phone Number</label>
                <span><?php echo htmlspecialchars($user['phone_number']); ?></span>
                <label>Date of Birth</label>
                <span><?php echo htmlspecialchars($user['dob']); ?></span>
                <label>National ID / Passport Number</label>
                <span><?php echo htmlspecialchars($user['n_id']); ?></span>
                <label>Permanent Address</label>
                <span><?php echo htmlspecialchars($user['permanent_address']); ?></span>
                <label>Current/Temporary Address</label>
                <span><?php echo htmlspecialchars($user['current_address']); ?></span>
                <label for="edit"><a href="edit.php">Edit</a></label>
            </div>
            <!-- Booking Table -->
            <h3 style="margin-top:40px; font-size:1.3em; color:#2563eb; text-align:center;">Your Bookings</h3>
            <?php if ($booking_result && mysqli_num_rows($booking_result) > 0): ?>
                <table class="booking-table">
                    <tr>
                        <th>Car Type</th>
                        <th>Pickup Date</th>
                        <th>Pickup Location</th>
                        <th>Status</th>
                    </tr>
                    <?php while($booking = mysqli_fetch_assoc($booking_result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($booking['car_type']); ?></td>
                            <td><?php echo htmlspecialchars($booking['pickup_date']); ?></td>
                            <td><?php echo htmlspecialchars($booking['pickup_location']); ?></td>
                            <td><?php echo htmlspecialchars($booking['status']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <div class="no-booking">No bookings found for your account.</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>