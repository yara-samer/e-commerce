<?php include('header.php'); ?>

<?php
$connect = mysqli_connect("localhost", "root", "", "project");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = $_POST['password'];
    
    // query
    $query = "SELECT * from users where email = '$email' and password = '$password' limit 1";
    // execute
    $result = mysqli_query($connect, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["USER"] = $row;
        header("Location: profile.php");
        exit;
    } else {
        $error = "Email or Password is invalid";
    }
}
?>

<div class="main">
    <?php
    if (isset($error)) {
        echo "<h2 class='text-center' style='color: red;'>" . $error . "</h2>";
    }
    ?>
<div class="auth-container">
<div class="login">
    <div class="avatar"><i class="fa-solid fa-user"></i></div>
    <h2>Login</h2>

    <form action="login.php" method="POST">
        <div class="label-row">
            <label for="email">Email</label>
            <a href="#">Forgot password?</a>
        </div>
        <div class="field">
            <i class="fa-regular fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <label for="password">Password</label>
        <div class="field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <button type="submit">Log In</button>
    </form>

    <div class="divider"><span>or continue with</span></div>

    <div class="social">
        <a href="https://www.google.com"><i class="fa-brands fa-google"></i></a>
        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
    </div>

    <p>Not registered yet? <a href="signup.php" id="hover-signup">Sign Up</a></p>
</div>
</div>

<script>new WOW().init();</script>

<?php include("footer.php") ?>