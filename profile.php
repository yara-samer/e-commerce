<?php include('header.php'); ?>
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// حفظ الرسالة في متغير محلي قبل أي إجراء
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
$msg_type = isset($_SESSION['msg_type']) ? $_SESSION['msg_type'] : '';

// مسح الرسالة من الجلسة لكي لا تظهر مجدداً عند عمل Refresh
unset($_SESSION['msg']);
unset($_SESSION['msg_type']);

$connect = mysqli_connect("localhost", "root", "", "project");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION['USER'])) {
    header("Location: home.php");
    exit();
}

$user_id = $_SESSION['USER']['id'];

$query = "SELECT * FROM users WHERE id = '$user_id' LIMIT 1";
$result = mysqli_query($connect, $query);
$user = mysqli_fetch_assoc($result);
?>

<div class="profile-card">
    <h2 class="title-text">user profile</h2>

    <!-- طباعة رسالة التحديث بوضوح -->
    <?php if (!empty($msg)): ?>
        <div class="alert-msg alert-success">
            <?php echo htmlspecialchars($msg); ?>
        </div>
    <?php endif; ?>

    <form action="update_profile.php" method="POST" enctype="multipart/form-data" autocomplete="off">

        <div class="avatar-container" style="text-align: center; margin-bottom: 20px;">
            <label for="profile_img_input" class="avatar-label" style="cursor: pointer; display: inline-block; position: relative;">
                <div class="img-circle">
                    <img id="img_preview" src="<?php echo !empty($user['image']) ? $user['image'] : ''; ?>" style="<?php echo !empty($user['image']) ? 'display:block;' : 'display:none;'; ?>">
                    <i id="default_icon" class="fa-solid fa-user" style="<?php echo !empty($user['image']) ? 'display:none;' : 'display:block;'; ?>"></i>
                </div>
                <div class="camera-badge">
                    <i class="fa-solid fa-camera"></i>
                </div>
            </label>
            <p class="image-profile-text">image profile</p>
            <input type="file" id="profile_img_input" name="profile_img" accept="image/*" style="display: none;" onchange="previewImage(this);">
        </div>

        <div class="form-group">
            <label>Full Name</label>
            <div class="field-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="fullname" placeholder="Full Name" value="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <div class="field-box">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" value="" autocomplete="new-password">
            </div>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <div class="field-box">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="phone" placeholder="Phone Number" value="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <label>Password</label>
            <div class="field-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Leave empty to keep current" value="" autocomplete="new-password">
            </div>
        </div>

        <button type="submit" name="submit_update" class="btn-action btn-update">Update Profile</button>
    </form>

    <form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete account?');">
        <button type="submit" name="delete_btn" class="btn-action btn-delete">Delete Account</button>
    </form>
</div>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('img_preview').src = e.target.result;
            document.getElementById('img_preview').style.display = 'block';
            document.getElementById('default_icon').style.display = 'none';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<?php include("footer.php") ?>
