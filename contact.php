<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Campus Digital Bulletin Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #3334;
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

        .container {
            margin: auto;
            width: 60%;
            padding: 20px;
            background-color: #f2e60a;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #070000;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #070000;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #070000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Contact Us</h1>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <a href="home.php">Home</a>
        <a href="academics.php">Academics</a>
        <a href="events.php">Events</a>
        <a href="sports.php">Sports</a>
        <a href="contact.php">Contact Us</a>
       
    </nav>

    <!-- Main Content -->
    <div class="container">
        <form action="contact-process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <nav>
            <a href="privacy.php">Privacy Policy</a> <!-- Added link to the Privacy Policy -->
            <a href="terms.php">Terms of Use</a> <!-- Added link to the Terms of Use -->
            <a href="accessibility.php">Accessibility</a> <!-- Added link to the Accessibility Statement -->
        </nav>
    </footer>
</body>
</html>
<?php include 'footer.php'; ?>
