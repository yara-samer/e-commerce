<?php include('header.php'); ?>
<body>
<div class="container">
    <section class="hero">

        <div class="hero-content">

            <p class="hero-subtitle">
                COMFORT TODAY, SUCCESS TOMORROW.
            </p>

            <h1>
                Find Your Perfect<br>
                <span>Student Home</span>
            </h1>
            <p class="hero-description">
                Comfortable, affordable and secure accommodation
                <br>designed to make student life easier.
            </p>
            <div class="hero-buttons">
                <button><a href="booking.php" class="btn-primary">Explore Rooms</a><span> →</span></button>
                <button><a href="aboutus.php" class="btn-secondary">Learn More</a> <span>→</span></button>
            </div>
        </div>
    </section>
    <!-- Search Section -->
    <section class="search-section">

        <div class="search-box">

            <div class="search-item">
                <label>Location</label>
                <select>
                    <option>Select Location</option>
                    <option>Cairo</option>
                    <option>Giza</option>
                    <option>Alexandria</option>
                </select>
            </div>

            <div class="search-item">
                <label>Housing Type</label>
                <select>
                    <option>All Types</option>
                    <option>Single Room</option>
                    <option>Shared Room</option>
                    <option>Apartment</option>
                </select>
            </div>

            <div class="search-item">
                <label>Price</label>
                <select>
                    <option>Any Price</option>
                    <option>Under 2000 EGP</option>
                    <option>2000 - 3000 EGP</option>
                    <option>Above 3000 EGP</option>
                </select>
            </div>

            <button class="search-button">
                Search Now
            </button>

        </div>

    </section>
    
</div>
    <!-- Why Choose Us -->
    <section class="why-choose">

        <div class="section-title">
            <p>WHY CHOOSE US</p>
            <h2>Why Choose Student Housing?</h2>
        </div>

        <div class="features">

            <div class="feature-card">
                <div class="feature-icon">🏠</div>
                <h3>Comfortable Living</h3>
                <p>
                    Enjoy comfortable rooms and a welcoming environment
                    designed for student life.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Affordable Prices</h3>
                <p>
                    Find quality student accommodation at prices
                    that fit your budget.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Safe & Secure</h3>
                <p>
                    Your safety matters. We provide secure
                    accommodation for every student.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📍</div>
                <h3>Great Locations</h3>
                <p>
                    Choose accommodation close to universities,
                    transportation and essential services.
                </p>
            </div>

        </div>

    </section>
    <!-- Featured Rooms -->
    <section class="featured-rooms">

        <div class="rooms-header">
            <div>
                <p class="section-label">OUR ROOMS</p>
                <h2>Featured Student Rooms</h2>
            </div>

            <a href="rooms.php" class="view-all">View All Rooms →</a>
        </div>

        <div class="rooms-grid">

            <div class="room-card">
                <img src="images/room1.jpg" alt="Student Room">

                <div class="room-info">
                    <span class="room-price">EGP 2,500 / month</span>

                    <h3>Modern Student Room</h3>

                    <p>📍 Near University</p>
                </div>
            </div>


            <div class="room-card">
                <img src="images/room2.jpg" alt="Student Room">

                <div class="room-info">
                    <span class="room-price">EGP 2,200 / month</span>

                    <h3>Comfortable Shared Room</h3>

                    <p>📍 Downtown</p>
                </div>
            </div>


            <div class="room-card">
                <img src="images/rom3.jpg" alt="Student Room">

                <div class="room-info">
                    <span class="room-price">EGP 1,800 / month</span>

                    <h3>Affordable Student Room</h3>

                    <p>📍 University Area</p>
                </div>
            </div>


            <div class="room-card">
                <img src="images/room4.jpg" alt="Student Room">

                <div class="room-info">
                    <span class="room-price">EGP 2,700 / month</span>

                    <h3>Premium Student Room</h3>

                    <p>📍 Main Campus</p>
                </div>
            </div>

        </div>

    </section>
    <?php include("footer.php") ?>