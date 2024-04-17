<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Campus Digital Bulletin Board</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #070000;
        }

        header {
            background-color: #f2e60a;
            color: #070000;
            text-align: center;
            padding: .4px;
            margin-bottom: 0px;
        }

        nav {
            background-color: #070000;
            padding: 2px;
            text-align: center;
            margin-bottom: 0;
        }

        nav a {
            color: #f5ee6c;
            text-decoration: none;
            margin: 0px;
            padding: 5px;
        }

        #profile {
            text-align: right;
            padding: 5px;
            background-color: #ff0000;
            display: inline-block;
            color: white;
        }

        #logout {
            color: white;
            cursor: pointer;
        }

        #events-content {
            padding: 20px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <header>
        <h1>Campus Digital Bulletin Board</h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="academics.php">Academics</a>
        <a href="events.php">Events</a>
        <a href="sports.php">Sports</a>
        
    </nav>

    <div id="events-content">
        <h2>Events</h2>
        <p>
            Stay informed about the exciting events happening on our campus. From cultural festivals to academic conferences, there's always something happening that you won't want to miss.
        </p>
        <p>
            Check this space for event details, schedules, and highlights. Join us in celebrating the diverse and vibrant community on our campus.
        </p>
    </div>

    <script>
        // Logout functionality (you can customize this part based on your actual implementation)
        document.getElementById('logout').addEventListener('click', () => {
            alert('Logout successful!');
            // Add logic to redirect to the login page or perform logout actions
        });
    </script>
</body>
</html>
<?php include 'footer.php'; ?>
