<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Mi Elena</title>

    <link href="https://fonts.google.com/specimen/Playfair+Display" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Fauna+One" rel="stylesheet">

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

        /* Sticky Header */
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
            background-color: transparent; /* Initially transparent */
        }

        .header-nav-container.scrolled {
            background-color: rgba(20, 93, 160, 0.4);
            backdrop-filter: blur(5px);
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

        nav a:hover {
            color: #e3f2fd;
        }

        nav a:last-child {
            margin-right: 17px; /* Add margin to the right */
        }


        /* Hero Section */
        .hero {
            width: 100%;
            height: 100vh;
            background-image: url('pics/bgimg.png'); /* Replace with actual image path */
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            z-index: 1;
            font-family: 'Playfair Display', serif;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 400;
            font-size: 72px;
            margin: 0;
        }

        .hero-content p {
            font-family: 'Libre Caslon Display', serif;
            font-size: 50px;
            margin: 10px 0;
            font-style: italic;
        }

    </style>
</head>
<body>

    <!-- Sticky Header with Navigation -->
    <div class="header-nav-container" id="header-nav">
        <header>
            <img src="pics/logo.png" alt="Mi Elena Private Resort" width="80">
        </header>
        <nav>
            <a href="landing.php">HOME</a>
            <a href="aboutus.php">ABOUT US</a>
            <a href="facilities.php">FACILITIES</a>
            <a href="booknow.php">BOOK NOW</a>
        </nav>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Mi Elena</h1>
            <p>#StayAtMiElena</p>
            
        </div>
        </div>


    <script>
        // JavaScript to handle the sticky header behavior
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
