<?php include('header.php'); ?>

<div class="contact-page">
    <div class="contact-info">
        <div class="logo-circle">
            <span>🏠</span>
        </div>
        <h1>Contact Us</h1>
        <p>
            Have a question or need help?
            Send us a message and our team will get back to you.
        </p>

        <div class="contact-details">
            <div>
            <p><i class="fa-solid fa-envelope" style="color: #D2933E;"></i> Studentia@gmail.com</p>
            </div>

            <div>
            <p><i class="fa-solid fa-phone" style="color: #D2933E;"></i>+20 123 4567 890</p>
            </div>

            <div>
              <p><i class="fa-solid fa-location-dot" style="color: #D2933E;"></i>Cairo,Egypt</p>
            </div>
        </div>
    </div>

<div class="contact-card">
        <h2>Send Us a Message</h2>
        <form action="send_message.php" method="POST">

            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
            </div>

            <div class="input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message..." required></textarea>
            </div>
            <a href="home.php"><button type="submit">Send Message</button></a>
        </form>
    </div>
</div>
<?php include("footer.php") ?>