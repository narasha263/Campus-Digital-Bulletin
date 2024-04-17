<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics - Campus Digital Bulletin Board</title>
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
            background-color: #fe0404;
            display: inline-block;
            color: white;
        }

        #logout {
            color: white;
            cursor: pointer;
        }

        #academics-content {
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
    <div id="academics-content">
        <h2>Academics</h2>
        <p>
            Explore the world of knowledge and learning at our esteemed university. Our academic programs are designed to empower students with the skills and knowledge needed for success in their chosen fields.
        </p>
        <p>
            From innovative courses to dedicated faculty, we are committed to providing a nurturing environment for academic excellence. Stay tuned for updates on new courses, academic achievements, and more.
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
