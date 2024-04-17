<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports - Campus Digital Bulletin Board</title>
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

        #sports-content {
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

    <div id="sports-content">
        <h2>Sports</h2>
        <p>
            Dive into the world of sports at our university. From competitive tournaments to recreational activities, we offer a range of opportunities for students to stay active and engaged.
        </p>
        <p>
            Explore the latest updates on sports events, achievements of our teams, and information on how to get involved in various sports activities on campus.
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
