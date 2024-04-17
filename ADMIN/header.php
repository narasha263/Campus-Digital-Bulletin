<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Campus Digital Bulletin Board</title>
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
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h3>Admin Dashboard</h3>
        <a href="dashboard.php">Dashboard</a>
        <a href="posts.php">Posts</a>
        <a href="users.php">Users</a>
        <a href="settings.php">Settings</a>
        <a href="logout.php">Logout</a>

    </div>
