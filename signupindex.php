<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
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
            align-items: flex-start; 
            height: 150vh;
            margin: 0;
            padding-bottom: 100px;

        }

        body {
            background-image: url('pics/bgimg.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }


        * {
            box-sizing: border-box;
        }

        .page-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: -1;
        }

        .page-background img {
            width: 100%;
            height: auto; /* Keep the aspect ratio */
            min-height: 150vh; /* Ensures the image covers the height of the viewport */
        }


        form {
            width: 650px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            margin-top: 150px; 
            position: relative;
            margin-bottom: 300px;
            font-family: Fauna One, serif;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: normal;
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
            font-family: Fauna One, serif;
        }

        button {
            background-color: #145da0;
            color: #ffffff;
            padding: 10px 0;
            width: 50%;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
            margin-bottom: 30px;
            font-family: Fauna One, serif;
        }

        button:hover {
            background-color: #0f4c81;
        }

        label {
            font-weight: bold;
            display: block;
            margin-left: 35px;
            text-align: left;
            margin-bottom: 5px;
            color: #000;
        }

        a {
            font-size: 14px;
            color: #145da0;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
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
            align-items: right;
            display: inline-block;
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

<!-- Signup Form -->
<form action="signup.php" method="post">

<h2>Sign Up</h2>

    <!-- General Error Display -->
    <?php 
    if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
        <div style="color:red;">
            <?php foreach ($_SESSION['errors'] as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
        <?php unset($_SESSION['errors']); // Clear errors after displaying ?>
    <?php endif; ?>

    <!-- Signup Form -->

    <label for="name">Name</label>
    <input type="text" name="name" id="name" 
           value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" 
           value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>">

    <!-- Contact Number -->
    <label for="contact_number">Contact Number</label>
    <?php if (isset($_SESSION['errors']['contact_number'])): ?>
            <p style="color:red;"><?php echo $_SESSION['errors']['contact_number']; ?></p>
    <?php endif; ?>
    <input type="text" name="contact_number" id="contact_number" 
            value="<?php echo isset($_SESSION['form_data']['contact_number']) ? $_SESSION['form_data']['contact_number'] : ''; ?>" 
            maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')">

    <label for="uname">Username</label>
    <input type="text" name="uname" id="uname" 
           value="<?php echo isset($_SESSION['form_data']['uname']) ? $_SESSION['form_data']['uname'] : ''; ?>">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" minlength="8">

    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password">

    <a href="index.php">Already have an account?</a>

    <button type="submit">Sign Up</button>
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

<?php if (isset($_GET['error'])) { ?>
    <p style="color: red;"><?php echo $_GET['error']; ?></p>
<?php } ?>

</body>
</html>
