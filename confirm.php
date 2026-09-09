<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Confirmation</title>

    <!-- Header CSS -->
    <link rel="stylesheet" href="css/Header.css">

    <!-- Booking CSS -->
    <link rel="stylesheet" href="css/Booking.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">

    <style>

        /* =========================
           CONFIRMATION PAGE
           ========================= */

        body {
            background-color: #FBF5EF;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #0A2640;
            
        }


        /* =========================
           CONFIRMATION CONTAINER
           ========================= */

        .confirmation-container {
            max-width: 750px;
            margin: 60px auto;
            padding: 45px;
            background-color: white;
            border-radius: 18px;
            box-shadow: 0 0 25px rgba(10, 38, 64, 0.18);
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }


        /* =========================
           SUCCESS ICON
           ========================= */

        .success-icon {
            font-size: 65px;
            margin-bottom: 15px;
        }


        /* =========================
           TITLE
           ========================= */

        .confirmation-container h1 {
            color: #425C39;
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 15px;
        }


        /* =========================
           WELCOME MESSAGE
           ========================= */

        .welcome-message {
            color: #0A2640;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 12px;
        }


        .confirmation-message {
            color: #555;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
        }


        /* =========================
           QR CODE
           ========================= */

        .qr-section {
            background-color: #FBF5EF;
            padding: 25px;
            border-radius: 15px;
            margin: 25px auto;
            max-width: 400px;
        }


        .qr-section h3 {
            color: #0A2640;
            font-size: 20px;
            margin-bottom: 15px;
        }


        .QR-code {
            width: 170px;
            height: 170px;
            object-fit: contain;
            display: block;
            margin: 15px auto;
        }


        .qr-section p {
            color: #555;
            font-size: 15px;
            line-height: 1.5;
        }


        /* =========================
           FAQ
           ========================= */

        .faq-section {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #ddd;
        }


        .faq-section h2 {
            color: #0A2640;
            font-size: 25px;
            margin-bottom: 20px;
        }


        .faq-section ul {
            text-align: left;
            font-size: 17px;
            line-height: 1.8;
            padding-left: 25px;
        }


        .faq-section li {
            margin-bottom: 8px;
        }


        /* =========================
           BUTTONS
           ========================= */

        .confirmation-buttons {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }


        .back-btn,
        .support-btn {
            padding: 12px 25px;
            font-size: 17px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s ease,
                        background-color 0.3s ease;
        }


        .back-btn {
            background-color: #0A2640;
            color: white;
        }


        .back-btn:hover {
            background-color: #D2933E;
            transform: scale(1.05);
        }


        .support-btn {
            background-color: #D2933E;
            color: white;
        }


        .support-btn:hover {
            background-color: #425C39;
            transform: scale(1.05);
        }


        /* =========================
           ANIMATION
           ========================= */

        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

    </style>

</head>


<body>

    <!-- HEADER -->
    <?php include 'includes/header.php'; ?>


    <!-- CONFIRMATION -->
    <div class="confirmation-container">

        <div class="success-icon">
            🎉
        </div>

        <h1>
            Booking Confirmed!
        </h1>

        <p class="welcome-message">
            Welcome! Your booking was successful.
        </p>

        <p class="confirmation-message">
            Your booking has been successfully submitted.
            You can arrive on the first day of your chosen duration.
        </p>


        <!-- QR CODE -->
        <div class="qr-section">

            <h3>
                Payment Verification
            </h3>

            <img
                src="images/QR.png"
                alt="QR Code"
                class="QR-code"
            >

            <p>
                Please scan this QR code when you arrive
                to verify your payment.
            </p>

        </div>


        <!-- FAQ -->
        <div class="faq-section">

            <h2>
                Frequently Asked Questions
            </h2>

            <ul>

                <li>
                    Can I change my room after booking?
                </li>

                <li>
                    Is there a refund policy?
                </li>

                <li>
                    How can I contact the administration?
                </li>

            </ul>

        </div>


        <!-- BUTTONS -->
        <div class="confirmation-buttons">

            <button
                type="button"
                class="back-btn"
                onclick="history.back()">
                Back
            </button>

            <a href="StudentHousing.php" class="support-btn">
    Finish Registration
</a>

        </div>

    </div>


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>


</body>

</html>