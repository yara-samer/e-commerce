<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Housing Details - Sheraton</title>
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  <div class="container mt-5">
    <!-- Title + Image -->
    <h1 class="text-center mb-4">Sheraton Student Housing</h1>
    <img src="images/image6.jpg" alt="Sheraton Housing" class="img-fluid rounded shadow mb-4">

    <!-- Contact -->
    <p><strong>Contact Number:</strong> 01012345678</p>

    <!-- Prices -->
    <p><strong>Original Price:</strong> <del>4000 EGP</del></p>
    <p class="discount-popup"><strong>Discount Price:</strong> 3500 EGP 🎉</p>

    <!-- Services -->
    <h3 class="mt-4">Services</h3>
    <ul class="list-unstyled">
      <li><span class="badge bg-success rounded-pill">Wi-Fi Available</span></li>
      <li><span class="badge bg-danger rounded-pill">Laundry Not Available</span></li>
      <li><span class="badge bg-warning text-dark rounded-pill">Gym Coming Soon</span></li>
    </ul>

    <!-- House Details -->
    <h3 class="mt-4">House Information</h3>
    <ul>
      <li>Capacity: 20 Students</li>
      <li>Rooms: 5</li>
      <li>Type: Male Housing</li>
      <li>Status: <span class="badge bg-success">Available</span></li>
    </ul>

    <!-- Booking Instructions -->
<p class="details-text"><strong>How to Book:</strong> Click the button below to register and fill your details.</p>
<form action="booking.php" method="get">
  <button class="discount-popup" type="submit" class="book-btn">Book Now</button>
  <br>
  <br>
<p>
  <button  type="button" class="back-btn" onclick="history.back()"> Back</button>
</p>

</form>

   

    <!-- Google Maps Embed -->
    <h3 class="mt-4">Location</h3>
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110447.14191875614!2d31.31393959249809!3d30.109270627597585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145816539900dce9%3A0xa1a8ccf9a9419d26!2sSheraton%20Al%20Matar%2C%20El%20Nozha%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1788749588064!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
      
    </iframe>
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
</html>
