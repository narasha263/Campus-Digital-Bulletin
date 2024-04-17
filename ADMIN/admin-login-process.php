<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus_bulletin_board";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['loginSubmit'])) {
        // Get input from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare SQL statement to select admin from the database
        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if admin exists
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                // Passwords match, login successful
                $_SESSION['adminLoggedIn'] = true;
                header("Location: admin-dashboard.php");
                exit();
            } else {
                // Passwords do not match, display error message
                $_SESSION['adminLoginError'] = "Incorrect username or password";
                header("Location: admin-login.php");
                exit();
            }
        } else {
            // Admin does not exist, display error message
            $_SESSION['adminLoginError'] = "Incorrect username or password";
            header("Location: admin-login.php");
            exit();
        }
    }
}
?>
