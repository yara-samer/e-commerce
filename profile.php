<?php
include('header.php');

$connect = mysqli_connect("localhost", "root", "", "project");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// 1. التأكد من تسجيل الدخول
if (!isset($_SESSION['USER']['id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['USER']['id'];
$message = "";
$error = "";

// --- 2. عملية التحديث (UPDATE) ---
if (isset($_POST['update_btn'])) {
    $new_username = mysqli_real_escape_string($connect, $_POST['new_username']);
    $new_email    = mysqli_real_escape_string($connect, $_POST['new_email']);
    $new_password = mysqli_real_escape_string($connect, $_POST['new_password']);

    // تحديث بيانات المستخدم الحالي فقط بواسطة id
    $update_query = "UPDATE users SET username = '$new_username', email = '$new_email', password = '$new_password' WHERE id = '$user_id'";
    
    if (mysqli_query($connect, $update_query)) {
        $message = "Profile updated successfully!";
        // تحديث البيانات في الـ Session
        $_SESSION['USER']['username'] = $new_username;
        $_SESSION['USER']['email']    = $new_email;
    } else {
        $error = "Update failed: " . mysqli_error($connect);
    }
}

// --- 3. عملية الحذف (DELETE) ---
if (isset($_POST['delete_btn'])) {
    // حذف المستخدم الحالي فقط بواسطة id
    $delete_query = "DELETE FROM users WHERE id = '$user_id'";
    
    if (mysqli_query($connect, $delete_query)) {
        session_destroy();
        header("Location: signup.php");
        exit();
    } else {
        $error = "Delete failed: " . mysqli_error($connect);
    }
}

// جلب بيانات المستخدم لملء حقول التحديث ببياناته الحالية
$user_query  = "SELECT * FROM users WHERE id = '$user_id'";
$user_result = mysqli_query($connect, $user_query);
$current_user = mysqli_fetch_assoc($user_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="profile-card">
    <h2>User Profile</h2>

    <!-- رسائل النجاح أو الخطأ -->
    <?php if ($message != ""): ?>
        <p class="msg-success"><?php echo $message; ?></p>
    <?php endif; ?>
    
    <?php if ($error != ""): ?>
        <p class="msg-error"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- 1️⃣ فورم التحديث (Update Form) -->
    <form action="profile.php" method="POST">
        <div class="section-title">Update Your Information</div>

        <div class="form-group">
            <label for="new_username">Username:</label>
            <input type="text" id="new_username" name="new_username" value="<?php echo htmlspecialchars($current_user['username'] ?? ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="new_email">Email:</label>
            <input type="email" id="new_email" name="new_email" value="<?php echo htmlspecialchars($current_user['email'] ?? ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="new_password">Password:</label>
            <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
        </div>

        <button type="submit" name="update_btn" class="btn-update">Update Profile</button>
    </form>

    <hr>

    <!-- 2️⃣ فورم الحذف (Delete Form) - منفصلة تماماً -->
    <form action="profile.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
        <button type="submit" name="delete_btn" class="btn-delete">Delete Account</button>
    </form>
</div>

</body>
</html>