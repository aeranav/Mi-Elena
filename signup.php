<?php
session_start();
include "db_conn.php";

$errors = []; // Initialize an array to store errors

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact_number']) && 
    isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data); 
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $contact_number = validate($_POST['contact_number']);
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $confirm_pass = validate($_POST['confirm_password']);

    // Validation Checks
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($uname)) {
        $errors[] = "Username is required";
    }
    if (empty($pass)) {
        $errors[] = "Password is required";
    }
    if ($pass !== $confirm_pass) {
        $errors[] = "Passwords do not match";
    }
    if (strlen($contact_number) != 11 || !ctype_digit($contact_number)) {
        $errors[] = "Contact number must be 11 digits";
    }

    // If there are errors, store them in session and redirect
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors; // Store errors in session
        $_SESSION['form_data'] = $_POST; // Store form data to repopulate inputs
        header("Location: signupindex.php");
        exit();
    }

    // Password hashing
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE user_name='$uname' OR email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Username or Email is already taken";
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: signupindex.php");
        exit();
    } else {
        // Insert the new user
        $sql2 = "INSERT INTO users (name, email, contact_number, user_name, password) 
                 VALUES ('$name', '$email', '$contact_number', '$uname', '$hashed_pass')";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
            $_SESSION['user_name'] = $uname;
            $_SESSION['name'] = $name;
            $_SESSION['success'] = "Account created successfully"; // Set success message in session
            header("Location: index.php"); // Changed redirection to index.php
            exit();
        } else {
            $errors[] = "Something went wrong, try again";
            $_SESSION['errors'] = $errors;
            header("Location: signupindex.php");
            exit();
        }
        
    }
} else {
    header("Location: signupindex.php");
    exit();
}
