<?php
// Include database connection file
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New post added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
