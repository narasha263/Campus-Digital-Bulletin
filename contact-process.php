<?php
// Start the session
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Sanitize form data to prevent SQL injection
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        // Establish database connection (replace with your credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "campus_bulletin_board"; // Change to your actual database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert contact form data into the database
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the prepared statement
            $stmt->bind_param("sss", $name, $email, $message);
            if ($stmt->execute()) {
                // If insertion successful, set success message and redirect to contact page
                $_SESSION['success'] = "Message sent successfully. We'll get back to you soon!";
                // Display alert message using JavaScript
                echo '<script>alert("Message sent successfully. We\'ll get back to you soon!");</script>';
                header("Location: contact.php");
                exit;
            } else {
                // If insertion fails, set error message and redirect to contact page
                $_SESSION['error'] = "Error sending message. Please try again later.";
                header("Location: contact.php");
                exit;
            }
            // Close statement
            $stmt->close();
        } else {
            // If statement preparation fails, set error message and redirect to contact page
            $_SESSION['error'] = "Error: " . $conn->error;
            header("Location: contact.php");
            exit;
        }

        // Close the database connection
        $conn->close();
    } else {
        // If required fields are not filled, set error message and redirect to contact page
        $_SESSION['error'] = "All fields are required!";
        header("Location: contact.php");
        exit;
    }
} else {
    // If form data is not submitted, redirect to contact page
    header("Location: contact.php");
    exit;
}
?>
