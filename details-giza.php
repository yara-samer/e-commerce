<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Housing Details - Mohandessin</title>
  <link rel="stylesheet" href="Booking.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="cssII/details.css"/>
</head>
<body>
    <?php include 'includes/header.php'; ?>

  <div class="container mt-5">
    <!-- Title + Image -->
    <h1 class="text-center mb-4">Mohandessin Student Housing</h1>
    <img src="images/image5.jpg" alt="Sheraton Housing" class="img-fluid rounded shadow mb-4" >

    <!-- Contact -->
    <p><strong>Contact Number:</strong> 01178474655</p>

    <!-- Prices -->
    <p class="discount-popup"><strong>Original Price:</strong> 2000 EGP</p>

    <!-- Services -->
    <h3 class="mt-4">Services</h3>
    <ul class="list-unstyled">
      <li><span class="badge bg-success rounded-pill">Wi-Fi Available</span></li>
      <li><span class="badge bg-success rounded-pill">Gym Available</span></li>
      <li><span class="badge bg-warning text-dark rounded-pill">Air Conditioning Coming Soon</span></li>
    </ul>

    <!-- House Details -->
    <h3 class="mt-4">House Information</h3>
    <ul>
      <li>Capacity: 10 Students</li>
      <li>Rooms: 3</li>
      <li>Type: Male Housing</li>
      <li>Status: <span class="badge bg-warning ">AVAILABLE SOON</span></li>
            <!-- <li>Status: <span class="badge bg-danger">Fully Booked</span></li> -->

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
    <div class="ratio ratio-16x9 mb-3">
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110550.40770880201!2d31.107068236974765!3d30.016762525447408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1788766488030!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>    </div>
    <p><a href="https://www.google.com/maps?q=Mohandessin" target="_blank" class="btn btn-outline-primary">Share Location</a></p>
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
