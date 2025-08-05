<?php
include 'connect.php';

// Fetch the latest user (change query if you want to fetch by session/email)
$result = mysqli_query($conn, "SELECT * FROM user_info ORDER BY id DESC LIMIT 1");
$user = mysqli_fetch_assoc($result);
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
            max-width: 420px;
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
                    // Get first two letters of the user's name
                    $initials = strtoupper(substr($user['full_name'], 0, 2));
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
        </div>
    </div>
</body>
</html>