<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Campus Digital Bulletin Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<head>
  
   
    </style>
    <?php include_once "header.php"?>
</head>
<body>
<div id="content">
        <div class="container">
            <h1>Settings</h1>
            <p>Update your application settings here.</p>
            <form method="POST" action="update_settings.php">
                <!-- Your settings form fields here -->
                <div class="mb-3">
                    <label for="site_title" class="form-label">Site Title</label>
                    <input type="text" class="form-control" id="site_title" name="site_title">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <!-- Add more settings fields as needed -->

                <button type="submit" class="btn btn-primary">Save Settings</button>
            </form>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
</body>
</html>