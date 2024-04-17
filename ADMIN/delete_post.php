<?php
// Include database connection file
include 'db_connection.php';

// Check if ID parameter is set in URL
if(isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Prepare SQL statement to delete post from database
    $sql = "DELETE FROM news WHERE id = $post_id";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Post deleted successfully'); window.location.href = 'posts.php';</script>";
    } else {
        echo "Error deleting post: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    echo "Post ID not provided";
}
?>
