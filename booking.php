<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Form</title>
 <link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/Booking.css">
<link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

  <div class="container">
    <div class="logo">
  <img src="images/logo.jpeg" alt="Logo">
</div>

<br>
    <h1>Studentia Booking</h1>

    <!-- <form action="confirm.php" method="post" enctype="multipart/form-data"> -->
      <form class="booking-form" action="confirm.php" method="post" enctype="multipart/form-data">
      <!-- Personal Info -->
      <h2>Personal Information</h2>
      <p><input type="text" name="name" placeholder="Full Name" required></p>
      <p><input type="email" name="email" placeholder="Your Email" required></p>
      <p>
        <h2>Gender</h2>
        <br>
        <div class="gender-options">
        <label><input type="radio" name="gender" value="male" required> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        </div>
      </p>
      <p><input type="date" name="dob" required></p>
      <p><input type="text" name="university" placeholder="University Name" required></p>
      <p><input type="text" name="country" placeholder="Current Governorate" required></p>

      <!-- Duration -->
      <h2>Duration</h2>
             <select name="duration" required>
         <option value="" disabled selected>-- Duration --</option>
        <option value="1month">1 Month (1-9 Till 30-9)</option>
        <option value="1month">1 Month (1-10 Till 31-10)</option>
        <option value="6month">6 Month (from September Till Februray)</option>
        <option value="9months">9 Months (from September)</option>
        <option value="12months">1 year(from September)</option>
      </select>

      <!-- Room Type -->
      <h2>Room Type</h2>
      <select name="room" required>
        <option value="" disabled selected>-- Room Type --</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="triple">Triple</option>
      </select>

      <!-- Payment -->
      <h2>Payment Method</h2>
      <button type="button" onclick="showPayment('visa')">Pay by Visa</button>
      <button type="button" onclick="showPayment('instapay')">Pay by Instapay</button>

      <div id="payment-box" style="margin-top:15px; display:none;">
        <p id="payment-info"></p>
        <p><input type="file" name="screenshot"></p>
        <button type="button" onclick="hidePayment()">Done</button>
      </div>

      <!-- Rules -->
      <h2>Rules of the House</h2>
      
      <ul>
        <li>Respect everyone</li>
        <li>Respect house duration time</li>
        <li>Commit to pay rent every month</li>
      </ul>

      <!-- Buttons -->
      <button type="button" class="back-btn" onclick="history.back()"> Back</button>
      <button type="submit" class="book-btn">Confirm</button>
    <!-- </form> -->
</form>
  </div>

  <script>
    function showPayment(method) {
      const box = document.getElementById("payment-box");
      const info = document.getElementById("payment-info");
      box.style.display = "block";
      if(method === "visa") {
        info.innerHTML = "Please enter your Visa card details at the next step.";
      } else if(method === "instapay") {
        info.innerHTML = "Transfer to Instapay number: 01012345678 and upload screenshot.";
      }
    }
    function hidePayment() {
      document.getElementById("payment-box").style.display = "none";
    }
  </script>
</body>
<?php include 'includes/footer.php'; ?>
</html>
