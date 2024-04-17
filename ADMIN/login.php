
<?php
session_start();


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Hardcoded username and password
        $valid_username = "admin";
        $valid_password = "admin123";

        // Verify the provided username and password
        if ($username === $valid_username && $password === $valid_password) {
            // Set admin login session variable
            $_SESSION["admin_logged_in"] = true;
            // Redirect the user to the admin dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // If credentials don't match, set error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If username or password is missing, set error message
        $error_message = "Username and password are required.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Campus Digital Bulletin Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div><h1> Campus Digital Bulletin Board</h1></div>
<header>
        <div class="container">
            <h1>Admin Login</h1>
        </div>
    </header>

    <!-- Main Content -->
    <section class="admin-login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <?php if (isset($error_message)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>
                    <div class="container"> <!-- Added container for the form -->
                        <form method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">© <?php echo date('Y'); ?> Campus Digital Bulletin Board. All rights reserved.</span>
    </div>
</footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
