<?php
// filepath: c:\xampp\htdocs\tripizo\edit.php

include 'connect.php';

// Fetch the latest user (change query for real authentication)
$result = mysqli_query($conn, "SELECT * FROM user_info ORDER BY id DESC LIMIT 1");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile - Tripizo</title>
    <style>
        body { background: #f3f4f6; font-family: 'Segoe UI', Arial, sans-serif; }
        .edit-container { max-width: 420px; margin: 40px auto; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 32px 24px; }
        h2 { color: #2563eb; text-align: center; margin-bottom: 24px; }
        label { font-weight: bold; color: #374151; display: block; margin-top: 14px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; border-radius: 6px; border: 1px solid #d1d5db; }
        button { margin-top: 24px; width: 100%; background: #3b82f6; color: #fff; padding: 10px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; }
        button:hover { background: #2563eb; }
    </style>
</head>
<body>
    <div class="edit-container">
        <h2>Edit Profile</h2>
        <form action="set.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="<?=$user['full_name'] ?>" required>

            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" value="<?=$user['email'] ?>"required>

            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" value="<?=$user['phone_number'] ?>" required>

            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" value="<?=$user['dob'] ?>" required>

            <label for="n_id">National ID / Passport Number</label>
            <input type="text" name="n_id" id="n_id" value="<?=$user['n_id'] ?>">

            <label for="permanent_address">Permanent Address</label>
            <textarea name="permanent_address" id="permanent_address" rows="2" required><?=$user['permanent_address']?></textarea>

            <label for="current_address">Current/Temporary Address</label>
            <textarea name="current_address" id="current_address" rows="2" required><?=$user['current_address'] ?></textarea>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>