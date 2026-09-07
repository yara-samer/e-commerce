<?php include('header.php'); ?>
<?php $connect=  mysqli_connect("localhost", "root", "", "project");

if($_POST){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')"; 
$result = mysqli_query($connect, $query);
 if ($result) {
        $_SESSION['success_msg'] = " Saved successfully !";
        header("Location: login.php");
        exit();
    } else {
        echo "EROR" . mysqli_error($connect);
    }
}
?>
<img src="animation_BG.gif" class="background-animation" alt="">
<div class="sign-up">
    <div class="avatar"><i class="fa-solid fa-user"></i></div>
    <h2>Sign Up</h2>

    <form action="signup.php" method="POST">
        <label for="name">Name</label>
        <div class="field">
            <i class="fa-regular fa-user"></i>
            <input type="text" id="name" name="username" placeholder="Enter your name">
        </div>

        <label for="email">Email</label>
        <div class="field">
            <i class="fa-regular fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>

        <label for="password">Password</label>
        <div class="field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Create a password">
        </div>

        <button type="submit">Sign Up</button>
    </form>


    <div class="divider"><span>or continue with</span></div>

    <div class="social">
        <a href="https://www.google.com"><i class="fa-brands fa-google"></i></a>
        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
    </div>

    <p>Already have an account?<a href="login.php" id="hover-login">Log In</a></p>
</div>
<script>
    new WOW().init();
</script>
</body>

</html>