<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
  <link rel="stylesheet" href="style.css">
  <style>
   
    body {
      background-color: #FBF5EF;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #0A2640;
    }

   
    .popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(10, 38, 64, 0.7);
      justify-content: center;
      align-items: center;
      cursor: pointer; 
    }

    .popup-content {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      text-align: center;
      max-width: 400px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      animation: fadeIn 0.8s ease-in-out;
      position: relative;
    }

    .popup-content h2 {
      color: #425C39; 
      margin-bottom: 15px;
    }

    .popup-content p {
      font-size: 18px;
      margin: 10px 0;
    }

    .QR-code {
      width: 150px;
      margin: 20px auto;
      display: block;
    }

    
    .confetti {
      position: absolute;
      top: -20px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 30px;
      animation: fall 2s infinite;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes fall {
      0% { transform: translate(-50%, -20px); opacity: 1; }
      100% { transform: translate(-50%, 200px); opacity: 0; }
    }

   
    .container {
      max-width: 700px;
      margin: 40px auto;
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(10, 38, 64, 0.2);
    }

    h3 {
      color: #0A2640;
      margin-bottom: 15px;
    }

    ul {
      text-align: left;
      font-size: 18px;
      margin-top: 15px;
    }

    
    .back-btn, .support-btn {
      display: inline-block;
      margin: 20px 10px;
      padding: 12px 25px;
      font-size: 18px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s ease;
      color: #fff;
    }

    .back-btn {
      background-color: #0A2640;
    }
    .back-btn:hover {
      background-color: #D2933E;
      transform: scale(1.05);
    }

    .support-btn {
      background-color: #D2933E;
    }
    .support-btn:hover {
      background-color: #425C39;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <!-- Pop-up -->
  <div id="popup" class="popup" onclick="closePopup()">
    <div class="popup-content">
      <div class="confetti">🎉</div>
      <h1>✅ Booking Confirmed!</h1>
      <p><h2>Welcome, Your booking is successful.</h2></p>
      <p>You can arrive on the first day of your chosen duration.</p>
      <img src="QR.png" alt="QR Code" class="QR-code">
      <p>Scan this QR code when you arrive to verify your payment.</p>
      <!-- <p><em>(Click anywhere to close this message)</em></p> -->
    </div>
  </div>

  <!-- FAQ Section -->
  <div class="container">
    <h3>Frequently Asked Questions</h3>
    <ul>
      <li>Can I change my room after booking?</li>
      <li>Is there a refund policy?</li>
      <li>How can I contact the administration?</li>
    </ul>
    <button class="back-btn" onclick="history.back()"> Back</button>
    <button class="support-btn">Contact Support</button>
  </div>

  <script>
    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }
    window.onload = function() {
      document.getElementById("popup").style.display = "flex";
    }
  </script>
</body>
</html>