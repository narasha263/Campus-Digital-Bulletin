<?php
// Include database connection file if needed
// include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $site_title = $_POST['site_title'];
    // Handle other form fields similarly

    // Retrieve or define the $logo variable here (assuming it's a form input)
    $logo = $_POST['logo']; // Adjust this line based on how you retrieve the logo data

    // Include the database connection file or define $conn here
    include "db_connection.php"; // Include the database connection file

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the settings already exist
    $sql_check = "SELECT * FROM settings WHERE id = 1";
    $result_check = $conn->query($sql_check);

    // If no settings found, insert new settings
    if ($result_check->num_rows == 0) {
        // Insert settings query
        $sql_insert = "INSERT INTO settings (id, site_title, logo) VALUES (1, ?, ?)";

        // Prepare and bind the SQL statement
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ss", $site_title, $logo);

        // Execute SQL statement and handle errors if any
        if ($stmt_insert->execute()) {
            // Settings inserted successfully
            $stmt_insert->close();
        } else {
            // Error inserting settings
            echo "Error: " . $conn->error;
            exit();
        }
    }

    // Update settings query
    $sql_update = "UPDATE settings SET site_title=?, logo=? WHERE id=1";

    // Prepare and bind the SQL statement
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ss", $site_title, $logo);

    // Execute SQL statement and handle errors if any
    if ($stmt_update->execute()) {
        // Settings updated successfully
        $stmt_update->close();
        $conn->close();

        // Redirect back to the settings page with a success message
        header("Location: settings.php?success=1");
        exit();
    } else {
        // Error updating settings
        echo "Error: " . $conn->error;
        exit();
    }

    // Close database connection
    $conn->close();
} else {
    // If the form is not submitted, redirect back to the settings page
    header("Location: settings.php");
    exit();
}
?>
