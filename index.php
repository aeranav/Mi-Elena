<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .page-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .page-background img {
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

        form {
            width: 400px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            font-family: Fauna One;
        }

        h2 {
            font-family: Playfair Display, serif;
            font-size: 35px;
            font-weight: 500;
            margin-bottom: 30px;
            color: #000;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            background-color: #d0edf6;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-family: Fauna One;
        }

        button {
            background-color: #145da0;
            color: #ffffff;
            padding: 10px 0;
            width: 60%;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            font-family: Fauna One;
        }

        button:hover {
            background-color: #0f4c81;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin-bottom: 0px;
            margin-left: 20px;
            color: #000;
            font-size: 15px;
        }

        a {
            font-size: 14px;
            color: #145da0;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        /* Container for header and nav */
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
            margin-top: 0px;
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: bold;
            font-style: italic;
        }

        nav a:hover {
            color: #e3f2fd;
        }

        /* Background color change on scroll for the whole strip */
        .scrolled {
            background-color: rgba(0, 0, 0, 0.4); /* #d0edf6 with 50% transparency */
            backdrop-filter: blur(5px); /* Optional: adds a blur effect */
        }
    </style>
</head>
<body>

<!-- Background Image -->
<div class="page-background">
    <img src="pics/bgimg.png" alt="Background Image">
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
        <a href="index.php">BOOK NOW</a>
    </nav>
</div>

<!-- Login Form -->
<form action="login.php" method="post">
    <h2>Log In</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    
    <label for="uname">Username</label>
    <input type="text" name="uname" placeholder="Username" id="uname"><br>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password"><br>

    <a href="signupindex.php">Don't have an account yet?</a>
    <button type="submit">Log In</button>
</form>

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
