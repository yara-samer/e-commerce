<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Housing Details - Agamy</title>
  <link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/Details.css">
<link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

  <div class="container mt-5">
    <!-- Title + Image -->
    <h1 class="text-center mb-4">Agamy Student Housing</h1>
    <img src="images/image7.jpg" alt="Agamy  Housing" class="img-fluid rounded shadow mb-4">

    <!-- Contact -->
    <p><strong>Contact Number:</strong>01167448763</p>

    <!-- Prices -->
    <p><strong>Original Price:</strong> <del>3800 EGP</del></p>
    <p class="discount-popup"><strong>Discount Price:</strong> 2900 EGP 🎉</p>

    <!-- Services -->
    <h3 class="mt-4">Services</h3>
    <ul class="list-unstyled">
      <li><span class="badge bg-success rounded-pill">Wi-Fi Available</span></li>
      <li><span class="badge bg-success rounded-pill">Air Conditioning Available</span></li>
      <li><span class="badge bg-warning text-dark rounded-pill">Cleaning Coming Soon</span></li>
    </ul>
    

    <!-- House Details -->
    <h3 class="mt-4">House Information</h3>
    <ul>
      <li>Capacity: 12 Students</li>
      <li>Rooms: 4</li>
      <li>Type: Female Housing</li>
      <li>Status: <span class="badge bg-success">Available</span></li>
    </ul>

   <!-- Booking Instructions -->
    <p><strong>How to Book:</strong> Click the button below to register and fill your details.</p>
    <form action="booking.php" method="get">
        <button class="discount-popup" type="submit" class="btn btn-warning btn-lg">Book Now</button>

    </form>
    <br>
  <br>
<p>
  <button type="button" class="back-btn" onclick="history.back()"> Back</button>
</p>

    <!-- Google Maps Embed -->
    <h3 class="mt-4">Location</h3>
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218360.4320591033!2d29.789724760297158!3d31.224005324433396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1788766448887!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    
    <p><a href="https://www.google.com/maps?q=30.091,31.364" target="_blank" class="btn btn-outline-primary mt-2">Share Location</a></p>
  </div>




   
  <!-- Animation for discount popup -->
  <style>
    .discount-popup {
      animation: pop 1s ease-in-out infinite alternate;
      color: #D2933E;
      font-size: 22px;
      font-weight: bold;
    }
    @keyframes pop {
      from { transform: scale(1); }
      to { transform: scale(1.1); color: #425C39; }
    }
  </style>
</body>
<?php include 'includes/footer.php'; ?>
</html>
