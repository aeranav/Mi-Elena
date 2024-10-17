<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Facilities - Mi Elena Private Resort</title>
    <style>

        @font-face {
            font-family: Playfair Display;
            src: url(fonts/PlayfairDisplay-VariableFont_wght.ttf);
        }

        @font-face {
            font-family: Viaoda Libre;
            src: url(fonts/ViaodaLibre-Regular.ttf); 
        }

        @font-face {
            font-family: Libre Caslon Display;
            src: url(fonts/LibreCaslonDisplay-Regular.ttf);
        }

        @font-face {
            font-family: Fauna One;
            src: url(fonts/FaunaOne-Regular.ttf);
        }

        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header with background image */
        .header-background {
            position: relative;
            width: 100%;
            height: 300px; /* Adjust this to your preferred height */
            /*background-image: url('your-image-path-here.png'); /* Update this with the correct image URL */
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        /* Overlay for text contrast */
        .header-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
        }

        /* Container for header and nav */
        .header-nav-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 30px;
            transition: background-color 0.5s ease;
            z-index: 1000;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 20px;
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: bold;
            font-style: italic;
        }

        nav a:last-child {
            margin-right: 60px; /* Add margin to the right */
        }


        /* Background color change on scroll for the whole strip */
        .scrolled {
            background-color: rgba(20, 93, 160, 0.4); /* #d0edf6 with 50% transparency */
            backdrop-filter: blur(5px); /* Optional: adds a blur effect */
        }

        .facilities-content {
            margin-top: -80px; /* Adjusted to account for the header height */
            padding: 20px;
            width: 80%;
            max-width: 1160px;
            text-align: center;
            background: #ffffff;
            text-align: left;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
            z-index: 1;
            margin-left: auto;
            margin-right: auto;
        }

        .top-left-button a{
            position: fixed;
            left: 0;
            padding: 20px 20px;
            background-color: #145da0;
            color: white;
            border: none;
            cursor: pointer;
            font-family: 'Fauna One', serif;
            font-size: 16px;
            text-decoration: none;
            z-index: 10; /* High z-index to ensure it is on top */
        }

        .facilities-content a{ 
            padding: 10px 10px;
            font-family: Fauna One, serif;
            font-size: 14px;
            font-weight: 600;
        }

        a{
            text-decoration: none;
            color: #145da0;
            
        }


        .facilities-content a:hover {
            background-color: #d0edf6;
            padding: 10px 10px;
        }

        .facilities-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 55px;
            margin-bottom: 50px;
            color: #145da0;
            text-align: center;
            font-weight: 500;
        }

        .facilities-content p{
            display: flex;
            margin-left: 90px;
            font-family: 'Fauna One', serif;
            font-weight: 700;
            color: #145da0;
            font-size: 20px;
        }

        .facilities-section {
            width: 100%;
            max-width: 1000px;
            margin: auto;
        }

        /* Facility Details Section */
        .facility-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .facility-details img {
            width: 50%;
            height: auto;
            
            margin-left: 10px;
        }

        .facility-details div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Fauna One', serif;
            font-size: 16px;
            margin-left: -50px;
            margin-top: -150px;
        }

        .facility-details h2 {
            font-family: 'Viaoda Libre', serif;
            font-size: 18px;
            color: #145da0;
            margin-bottom: 10px;
        }

        

        .facility-details ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .facility-details ul li {
            margin-bottom: 5px;
            
        }

        /* Added styling for the Rates section */
        .rates-section{
            text-align: left;
            margin-bottom: 50px;
            margin-left: 250px;
            margin-right: auto;
            display: flex;
        }


        .rates-table {
            margin-top: 20px;
            font-family: 'Fauna One', serif;
            color: #333333;
        }

        .rates-table th, .rates-table td {
            padding: 10px 20px;
            text-align: left;
        }

    </style>
</head>
<body>

<!-- Header Section with Background Image -->
<div class="header-background" id="header-background">
<img src="pics/header.png" alt="Mi Elena Private Resort Header" width="100%"> 

</div>

<!-- Container for Header and Navigation -->
<div class="header-nav-container" id="header-nav">
  
    <!-- Header Logo -->
    <header>
        <img src="pics/logo.png" alt="Mi Elena Private Resort" width="80">
    </header>

    <!-- Navigation Menu -->
    <nav>
        <a href="landing.php">HOME</a>
        <a href="aboutus.php">ABOUT US</a>
        <a href="facilities.php">FACILITIES</a>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <a href="booknow.php">BOOK NOW</a> <!-- Show booknow.php if logged in -->
        <?php else: ?>
            <a href="index.php">BOOK NOW</a> <!-- Show index.php if not logged in -->
        <?php endif; ?>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <a href="profile.php">PROFILE</a>
        <?php endif; ?>
    </nav>
</div>

<!-- Facilities Content -->
<div class="facilities-content">

    <a href="facilities.php" class="top-left-button">Facilities</a>
    <h1>M2</h1>

    <!-- Rates Section-->
    <p>Private Resort 2 Rates</p>
    <div class="rates-section">
        
        <table class="rates-table">
            <tr>
                <th>Capacity</th>
                <th>Day</th>
                <th>Night</th>
                <th>22 Hours</th>
                <th></th>
                <th>Extra Pax</th>
            </tr>
            <tr>
                <td>30 pax</td>
                <td>₱10,000</td>
                <td>₱12,000</td>
                <td>₱20,000</td>
                <td></td>
                <td>₱100/pax</td>
            </tr>
            <tr>
                <td>Time In</td>
                <td>8:00 am</td>
                <td>8:00 pm</td>
                <td>8:00 am</td>
                <td>8:00 pm</td>
                <td>-</td>
            </tr>

            <tr>
                <td>Time Out</td>
                <td>6:00 pm</td>
                <td>6:00 am</td>
                <td>6:00 am</td>
                <td>6:00 pm</td>
                <td>-</td>
            </tr>
        </table>
    </div>

    <p>Inclusions</p>

    <!-- Facilities Section -->
    <div class="facilities-section">

        <!-- Facility Details: Common Area -->
        <div class="facility-details">
            <img src="pics/m2commonarea.png" alt="Common Area">
            <div>
                <h2 style = "margin-top: 40px;">Common Area</h2>
                <ul>
                    <li>FREE WiFi</li>
                    <li>Unlimited use of Videoke (Strictly No changing of volumes.)</li>
                    <li>2 Long Tables and 30 chairs</li>
                    <li>Poolside Area (can fit up to 12 pax)</li>
                    <li style = "line-height:25px;">No Corkage Fee: Foods, Drinks, Liquors (Except Catering P2,500/50pax)</li>
                </ul>
            </div>
        </div>

        <!-- Facility Details: Swimming Pool -->
        <div class="facility-details">
            <img src="pics/m2pool.png" alt="Swimming Pool">
            <div>
                <h2>Swimming Pool</h2>
                <ul>
                    <li>5 ft depth</li>
                    <li>Kiddie Pool: 3 ft depth</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Bathrooms -->
        <div class="facility-details">
            <img src="pics/m2bathroom.png" alt="Bathrooms">
            <div>
                <h2>Bathrooms</h2>
                <ul>
                    <li>3 Bathrooms (1 bathroom each for Room 1 and Room 2)</li>
                    <li>1 bathroom and Shower Area (poolside)</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Rooms -->
        <div class="facility-details">
            <img src="pics/m2room.png" alt="Rooms">
            <div>
                <h2>Rooms</h2>
                <ul>
                    <li>Room 1: 9 double-sized beds (5 beds and 2 double deck)</li>
                    <li>Room 2: 2 beds (Fan only with bathroom)</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Kitchen -->
        <div class="facility-details">
            <img src="pics/m2kitchen.png" alt="Kitchen">
            <div>
                <h2>Kitchen</h2>
                <ul>
                    <li>Bring your own utensils</li>
                    <li>Water dispenser available (Hot & Cold)</li>
                    <li>Free use of refrigerator</li>
                    <li>Free use of Griller (Ihawan).</li>
                    <li>Microwave & gas stove</li>
                    


                </ul>
            </div>
        </div>

    </div>

</div>

<script>
    // JavaScript to add scrolled class when the user scrolls down
    window.addEventListener('scroll', function() {
        var headerNav = document.getElementById('header-nav');
        
        if (window.scrollY > 50) {
            headerNav.classList.add('scrolled');
        } else {
            headerNav.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>
