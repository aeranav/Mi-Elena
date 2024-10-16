<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>About Us - Mi Elena Private Resort</title>

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

        /* Header with background image */
        .header-background {
            position: relative;
            width: 100%;
            height: 300px; /* Adjust this to your preferred height */
            /*background-image: url('your-image-path-here.png'); /* Update this with the correct image URL */
            background-size: cover;
            background-position: center;
        }

        /* Overlay for text contrast */
        .header-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Adds a slight overlay for better readability of text */
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

        /* Background color change on scroll for the whole strip */
        .scrolled {
            background-color: rgba(20, 93, 160, 0.4); /* #d0edf6 with 50% transparency */
            backdrop-filter: blur(5px); /* Optional: adds a blur effect */
        }

        
        /* Page content */
        .about-content {
            margin-top: -150px;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
            text-align: left;
            background: #ffffff;
            text-align: left;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .about-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 55px;
            margin-bottom: 30px;
            color: #145da0;
            text-align: center;
            font-weight: 500;
        }

        .about-content p {
            font-family: 'Fauna One', serif;
            font-size: 16px;
            color: #333;
            line-height: 1.8;
            margin-bottom: 30px;
            width: 85%;
            margin-left: 70px;
        }

        /* Footer Section */
        .footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 100%;
            max-width: 1050px;
            margin: 30px auto 0;
            text-align: left;
            font-family: 'Fauna One', serif;
            font-size: 16px;
        }

        /* Footer Columns */
        .footer-column {
            width: 30%; /* Adjust width if necessary */
            color: #333;
        }

        /* Address, Contact, and Follow columns */
        .footer-column p {
            margin: 5px 0;
            font-size: 14px;
        }

        /* Footer Column Titles */
        .footer-column h3 {
            font-size: 14px;
            margin-bottom: 10px;
            color: #145da0;
        }

        /* Social Icons */
        .footer .social-icons img {
            width: 25px;
            margin-right: 10px;
        }

        .footer .social-icons a {
            display: inline-block;
            vertical-align: middle;
        }

        .footer .social-icons a:hover img {
            opacity: 0.7;
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
        <a href="#">BOOK NOW</a>
    </nav>
</div>

<!-- About Us Content -->
<div class="about-content">
    <h1>About Us</h1>
    <p>
        Mi Elena Resort was born from a family's love for swimming and celebrating together. 
        What started as a simple idea—turning an unused piece of land into a resort—has since grown 
        into a peaceful retreat for guests seeking relaxation and recreation. Located in the serene 
        area of Emerald Hills, our resort offers a getaway from the busy city life, where families and 
        friends can come together for special occasions or simply unwind by the pool.
    </p>
    <p>
        At first, managing the resort was a new experience for us, but over time, we found our rhythm. 
        As we continued to grow, we recognized the potential to offer even more to our guests. That's 
        when we decided to open our Mi Elena Events Place, providing a beautiful space for celebrations, 
        from birthdays to weddings. Today, Mi Elena is not only a destination for relaxation but also 
        for creating unforgettable memories.
    </p>

    <!-- Footer -->
    <div class="footer">
        <!-- Address Column -->
        <div class="footer-column">
            <h3>Address</h3>
            <p>BLK3 LOT10 Emerald Hills</p>
            <p>Subd. Brgy Sta Cruz 1870</p>
            <p>Antipolo, Philippines</p>
        </div>

        <!-- Contact Column -->
        <div class="footer-column">
            <h3>Contact</h3>
            <p>Smart</p>
            <p style="text-indent: 20px;">09473989805</p>
            <p style="text-indent: 20px;">09391583905</p>
            <p>Globe</p>
            <p style="text-indent: 20px;">09273087079</p>
            <p style="text-indent: 20px;">09260449648</p>
            <p><i>For ocular purposes only.</i></p>
        </div>

        <!-- Follow and Message Us Column -->
        <div class="footer-column">
            <h3>Follow and Message Us</h3>
            <div class="social-icons">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="messenger-icon.png" alt="Messenger"></a>
                <a href="#"><img src="email-icon.png" alt="Email"></a>
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
