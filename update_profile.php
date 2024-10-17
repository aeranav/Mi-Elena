<?php
session_start();
include('db_conn.php'); // Include your DB connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['id']; // Assuming user ID is stored in session after login
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // If the password field is not empty, hash the new password
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Update the user's information
    if (!empty($password)) {
        // Update with password change
        $sql = "UPDATE users SET name = ?, email = ?, contact_number = ?, user_name = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $email, $contact_number, $username, $hashed_password, $user_id);
    } else {
        // Update without password change
        $sql = "UPDATE users SET name = ?, email = ?, contact_number = ?, user_name = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $email, $contact_number, $username, $user_id);
    }

    if ($stmt->execute()) {
        // Update the session with the new values (optional)
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['contact_number'] = $contact_number;
        $_SESSION['username'] = $username;

        // Redirect back to profile with success message
        echo "<script>alert('Profile updated successfully!'); window.location.href = 'profile.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
