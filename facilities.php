<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Facilities - Mi Elena Private Resort</title>

    <link href="https://fonts.google.com/specimen/Playfair+Display" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Fauna+One" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Libre+Caslon+Display?query=libre+ca" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Viaoda+Libre?query=libre" rel="stylesheet">


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
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        /* Header with background image */
        .header-background {
            position: relative;
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
        }

        .header-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

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

        .scrolled {
            background-color: rgba(20, 93, 160, 0.4);
            backdrop-filter: blur(5px);
        }


        /* Facilities Content */
        .facilities-content {
            margin-top: -150px;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
            text-align: center;
            background: #ffffff;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
            z-index: 1;
            
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
            text-align: left;
            font-weight: bold;
            display: flex;
            color: #000;
            font-family: 'Fauna One', serif;
            font-size: 23px;
            margin-left: 150px;
            
        }

        .facilities-grid {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 40px;
            width: 70%;
            margin-left: 150px;
        }

        .facility-item {
            width: 220px;
            height: 295px;
            background-color: #f0f0f0;
            position: relative;
            margin-bottom: 10px;
        }

        .facility-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .facility-item:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .facility-caption {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
            color: #145da0;
            font-family: 'Viaoda Libre', serif;
            font-size: 16px;
        }

        .facility-caption a {
            text-decoration: none;
            color: #145da0;
        }

        .facility-caption a:hover {
            text-decoration: none;
        }

        /* Aligning captions below photos */
        .facilities-grid + .facilities-grid .facility-item {
            margin-top: 20px; /* Adds space between two sets of image grids */
        }

    </style>
</head>
<body>

<div class="header-background" id="header-background"></div>
    <img src="pics/header.png" alt="Mi Elena Private Resort Header" width="100%"> 

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
    <h1>Facilities</h1>

    <p>Resorts</p>
    <!-- Resorts Section -->
    <div class="facilities-grid">
        <div class="facility-item">
            <a href="m1.php">
            <img src="pics/m1.jpg" alt="Resort 1">
            <div class="facility-caption"><a href="m1.php">M1</a></div>
            </a>
        </div>
        <div class="facility-item">
            <a href="m2.php">
            <img src="pics/m2.jpg" alt="Resort 2">
            <div class="facility-caption"><a href="m2.php">M2</a></div>
            </a>
        </div>
        <div class="facility-item">
            <a href="m3.php">
            <img src="pics/m3.jpg" alt="Resort 3">
            <div class="facility-caption"><a href="m3.php">M3</a></div>
            </a>
        </div>
    </div>

    <p>Events Place</p>

    <!-- Events Place Section -->
    <div class="facilities-grid">
        <div class="facility-item">
            <img src="pics/eventspic.jpg" alt="Events Place">
            <div class="facility-caption"><a href="#">Events Place</a></div>
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
