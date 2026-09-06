<?php include('header.php'); ?>

<img src="animation_BG.gif" class="background-animation" alt="">

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

<script>new WOW().init();</script>
</body>
</html>