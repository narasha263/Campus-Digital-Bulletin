<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #b8b810;
            padding-top: 20px;
        }

        #sidebar a {
            padding: 10px 15px;
            display: block;
            color: #fff;
            text-decoration: none;
        }

        #sidebar a:hover {
            background-color: #495057;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        h1 {
            color: #343a40;
        }

        p {
            color: #6c757d;
        }

        footer {
            background-color: #b8b810;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h3>Admin Dashboard</h3>
        <a href="#">Dashboard</a>
        <a href="posts.php">Posts</a>
        <a href="users.php">Users</a>
        <a href="settings.php">Settings</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div id="content">
        <h1>Manage Posts</h1>
        
        <!-- Add Form for Adding New Post -->
        <h2>Add New Post</h2>
        <form method="POST" action="add_post.php">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Add Post">
        </form>
        
        <br>

        <!-- Display Existing Posts -->
        <h2>Existing Posts</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
            <?php
            // Include database connection file
            include 'db_connection.php';

            // Retrieve posts from database and display in table
            $sql = "SELECT * FROM news";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["content"] . "</td>";
                    echo "<td><a href='edit_post.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_post.php?id=" . $row["id"] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No posts found</td></tr>";
            }
            ?>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Campus Digital Bulletin Board</p>
    </footer>
</body>
</html>
