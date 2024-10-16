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
        <a href="#">BOOK NOW</a>
    </nav>
</div>

<!-- Facilities Content -->
<div class="facilities-content">
    <h1>M1</h1>

    <!-- Rates Section-->
    <p>Private Resort 1 Rates</p>
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
                <td>25 pax</td>
                <td>₱8,000</td>
                <td>₱9,000</td>
                <td>₱16,000</td>
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
            <img src="pics/m1commonarea.jpg" alt="Common Area">
            <div>
                <h2 style = "margin-top: 40px;">Common Area</h2>
                <ul>
                    <li>FREE WiFi</li>
                    <li>Unlimited use of Videoke (Strictly No changing of volumes.)</li>
                    <li>4 Tables and 25 chairs</li>
                    <li>Mini Kubo (can fit 6-10 pax)</li>
                    <li style = "line-height:25px;">No Corkage Fee: Foods, Drinks, Liquors (Except Catering P2,000/40pax)</li>
                </ul>
            </div>
        </div>

        <!-- Facility Details: Swimming Pool -->
        <div class="facility-details">
            <img src="pics/m1pool.jpg" alt="Swimming Pool">
            <div>
                <h2>Swimming Pool</h2>
                <ul>
                    <li>3ft to 5ft depth (Sloped layout)</li>
                    <li>Size: 5x7 sqm</li>
                    <li>With lights for night swimming</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Bathrooms -->
        <div class="facility-details">
            <img src="pics/m1bathroom.jpg" alt="Bathrooms">
            <div>
                <h2>Bathrooms</h2>
                <ul>
                    <li>3 Bathrooms (1 bathroom each for Room 1 and Room 2)</li>
                    <li>1 bathroom with shower (poolside)</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Rooms -->
        <div class="facility-details">
            <img src="pics/m1room.jpg" alt="Rooms">
            <div>
                <h2>Rooms</h2>
                <ul>
                    <li>Room 1: 4 double-sized beds (2 loft type and 1 double deck)</li>
                    <li>Room 2: 3 beds (1 bed and 1 double deck)</li>
                    <li>All rooms are air-conditioned with private bathrooms</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

                </ul>
            </div>
        </div>

        <!-- Facility Details: Kitchen -->
        <div class="facility-details">
            <img src="pics/m1kitchen.jpg" alt="Kitchen">
            <div>
                <h2>Kitchen</h2>
                <ul>
                    <li>Bring your own utensils</li>
                    <li>Water dispenser available (Hot & Cold)</li>
                    <li>Free use of refrigerator</li>
                    <li>Microwave & gas stove</li>
                    <li style="visibility: hidden;">•</li>
                    <li style="visibility: hidden;">•</li>

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
