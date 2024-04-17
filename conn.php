<?php
// Connect to your database (replace with your connection code)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "campus_bulletin_board";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>