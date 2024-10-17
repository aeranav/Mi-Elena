<?php
session_start();

// Ensure the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

// Retrieve the user's details (assumed to be stored in session for now)
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Name';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$contact_number = isset($_SESSION['contact_number']) ? $_SESSION['contact_number'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Mi Elena Private Resort</title>

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

        .header-background {
            position: relative;
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
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

        nav a:last-child {
            margin-right: 60px; /* Add margin to the right */
        }

        .scrolled {
            background-color: rgba(20, 93, 160, 0.4);
            backdrop-filter: blur(5px);
        }

        .profile-container {
            margin-top: 150px;
            padding: 20px;
            width: 50%;
            text-align: center;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-container h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #145da0;
            margin-bottom: 20px;
        }

        .profile-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #eaf5fa;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #145da0;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .logout-btn:hover {
            background-color: #0e417a;
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

    <?php
        // Include database connection file
        include('db_conn.php'); // make sure you have this file with correct DB connection
        $user_id = $_SESSION['id'];

        // Prepare and execute the SQL query
        $sql = "SELECT name, email, contact_number, user_name, password FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id); // 'i' indicates the id is an integer
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Fetch the user data
            $row = $result->fetch_assoc();
            
            // Assign data to variables
            $name = $row['name'];
            $email = $row['email'];
            $contact_number = $row['contact_number'];
            $username = $row['user_name'];
        } else {
            echo "User not found.";
        }
    ?>



    <div class="profile-container">
    <h1>Hello, <?php echo htmlspecialchars($name); ?></h1>

    <form action="update_profile.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

        <label for="contact_number">Contact Number</label>
        <input type="text" id="contact_number" name="contact_number" 
               value="<?php echo htmlspecialchars($contact_number); ?>" 
               maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')">

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter new password if changing">
        
        <!-- Update and Logout button -->
        <button type="submit" class="logout-btn">Update</button>
        </form>
        <form action="logout.php" method="post">
            <button type="submit" class="logout-btn">Log Out</button>
        </form>
    

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
