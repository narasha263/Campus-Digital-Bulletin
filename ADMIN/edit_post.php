<?php
// Include database connection file
include 'db_connection.php';

// Check if ID parameter is set in URL
if(isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Retrieve post data from database based on ID
    $sql = "SELECT * FROM news WHERE id = $post_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
    } else {
        echo "Post not found";
        exit;
    }
} else {
    echo "Post ID not provided";
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $new_title = $_POST['title'];
    $new_content = $_POST['content'];

    // Prepare SQL statement to update post data in database
    $sql = "UPDATE news SET title='$new_title', content='$new_content' WHERE id=$post_id";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Post updated successfully'); window.location.href = 'posts.php';</script>";
    } else {
        echo "Error updating post: " . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS styles */
        /* Add your CSS styles here */
    </style>
    <?php include_once "header.php"?>
</head>
<body>
<div id="content">
        
    <h1>Edit Post</h1>
    <form method="POST" action="">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"><?php echo $content; ?></textarea><br><br>
        <input type="submit" value="Update Post">
    </form>
</div>
</body>
</html>
<?php include_once "footer.php"?>
