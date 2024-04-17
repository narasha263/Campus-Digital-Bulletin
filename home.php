<?php
// Database credentials
$servername = "localhost";  // Change to your database server name
$username = "root";         // Change to your database username
$password = "";             // Change to your database password
$dbname = "campus_bulletin_board";  // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve news data from the database
$sql = "SELECT title, content, file_path FROM news";
$result = $conn->query($sql);

$newsData = array(); // Initialize the $newsData array

if ($result->num_rows > 0) {
    // Fetch news data from the database
    while ($row = $result->fetch_assoc()) {
        $newsData[] = array('title' => $row['title'], 'content' => $row['content'], 'file_path' => $row['file_path']);
    }
} else {
    $title = "Sample Title";
    $content = "Sample Content";
    $file_path = "https://example.com/file.pdf"; // Replace with the actual file path
    
    $sql_insert = "INSERT INTO news (title, content, file_path) VALUES ('$title', '$content', '$file_path')";
    
        // Retrieve the inserted news data
        $sql_select = "SELECT title, content, file_path FROM news";
        $result_select = $conn->query($sql_select);
        if ($result_select->num_rows > 0) {
            while ($row = $result_select->fetch_assoc()) {
                $newsData[] = array('title' => $row['title'], 'content' => $row['content'], 'file_path' => $row['file_path']);
            }
        }
    }


// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Digital Bulletin Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
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

        #news-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 10px;
            text-align: left;
        }

        .news-card {
            background: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: calc(25% - 20px);
            box-sizing: border-box;
            cursor: pointer; /* Add cursor pointer to indicate clickable */
        }

        h2 {
            color: #070000;
        }

        p {
            color: #070000;
        }

      

        #about-us {
            background-color: #f2e60a;
            padding: 10px;
            margin-top: 200px;
        }

        #profile {
            text-align: right;
            padding: 5px;
            background-color: #ff0000;
            display: inline-block;
        }

        #logout {
            color: white;
            cursor: pointer;
        }

        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            color:#b8b810;
        }

        .modal-content {
            background-color: #b8b810;
            margin: 5% auto; /* 5% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Footer styles */
        footer {
            background-color: #070000;
            color: #f5ee6c;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #f5ee6c;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer p {
            margin-bottom: 10px;
        }
        .container{
            background-color:red;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Campus Digital Bulletin Board</h1>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <a href="home.php">Home</a>
        <a href="academics.php">Academics</a>
        <a href="events.php">Events</a>
        <a href="sports.php">Sports</a>
        <a href="contact.php">Contact Us</a>
        <a href="ADMIN/login.php">Admin Panel</a>
        
    </nav>


    <!-- News Container -->
    <div id="news-container"></div>

    <script>
// Use retrieved news data in JavaScript
const newsData = <?php echo json_encode($newsData); ?>;
console.log(newsData);  // This will output the retrieved news data in JavaScript console
</script>

    <!-- About Us Section -->
    <div id="about-us">
        <h2>About Us</h2>
        <div>
            <p>Welcome to the Campus Digital Bulletin Board! Our platform aims to keep you updated with the latest news, events, and academic information on campus.</p>
            <p>For more information about our campus and its services, please visit our <a href="about.php">About page</a>.</p>
            <a href="about.php">Learn more about us</a>
        </div>
    </div>

    <!-- Modal for displaying full content -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-content"></p>
        </div>
    </div>

    <!-- JavaScript Section -->
    <div class=" container">
    <script>
        
        function renderNews(newsItems) {
    const newsContainer = document.getElementById('news-container');
    newsContainer.innerHTML = '';

    newsItems.forEach((newsItem, index) => {
        const card = document.createElement('div');
        card.classList.add('news-card');

        const title = document.createElement('h2');
        title.textContent = newsItem.title;

        const content = document.createElement('p');
        content.textContent = newsItem.content;

        // Check if file_path exists and create a link to it
        if (newsItem.file_path) {
    const fileLink = document.createElement('a');
    fileLink.href = newsItem.file_path;
    fileLink.textContent = "View link"; // You can customize the link text here
    fileLink.target = "_blank"; // Open the link in a new tab/window
    content.appendChild(document.createElement('br'));
    content.appendChild(fileLink);
}
        // Add click event to open modal with full content
        card.addEventListener('click', () => {
            openModal(newsItem);
        });

        card.appendChild(title);
        card.appendChild(content);
        newsContainer.appendChild(card);
    });
}

        // Function to open modal with full content
        function openModal(newsItem) {
            const modal = document.getElementById('myModal');
            const modalContent = document.getElementById('modal-content');
            modalContent.innerHTML = `<h2>${newsItem.title}</h2><p>${newsItem.content}</p>`;
            modal.style.display = 'block';
        }

        // Function to close modal
        function closeModal() {
            const modal = document.getElementById('myModal');
            modal.style.display = 'none';
        }

        // Function to filter news based on search input
        function searchNews() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const filteredNews = newsData.filter(newsItem => {
                return newsItem.title.toLowerCase().includes(searchInput) || newsItem.content.toLowerCase().includes(searchInput);
            });
            renderNews(filteredNews);
        }

        // Call the function to render all news on page load
        window.onload = function() {
            renderNews(newsData);
        };

        
    </script>
</div>

    <!-- Footer -->
    
        <div>
            <p>Follow us on social media:</p>
            <ul>
                <li><a href="https://www.facebook.com/campusdigitalbulletin">Facebook</a></li>
                <li><a href="https://twitter.com/campusbulletin">Twitter</a></li>
                <li><a href="https://www.instagram.com/campusbulletin">Instagram</a></li>
            </ul>
        </div>
        <div>
            <p>Have feedback or questions? <a href="contact.php">Contact us</a>!</p>
        </div><footer>

        <nav>
            <a href="privacy.php">Privacy Policy</a> <!-- Added link to the Privacy Policy -->
            <a href="terms.php">Terms of Use</a> <!-- Added link to the Terms of Use -->
            <a href="accessibility.php">Accessibility</a> <!-- Added link to the Accessibility Statement -->
        </nav>
    </footer>
</body>
</html>
