<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Campus Digital Bulletin Board</title>
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

        #about-content {
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

    <div id="about-content">
        <h2>About Us</h2>
        <p>
            Welcome to the Campus Digital Bulletin Board. We are dedicated to providing the latest updates and information about academics, events, and sports within the university.
        </p>
        <p>
            Our platform serves as a central hub for students to stay informed and connected with the happenings on campus. Whether it's news about new courses, upcoming events, or sports achievements, you'll find it all here.
        </p>
        <p>
            Thank you for being a part of our digital community. Feel free to explore the various sections and stay tuned for exciting updates.
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
