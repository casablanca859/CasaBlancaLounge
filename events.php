<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<div id="video-container">
    <video id="video" autoplay loop muted>
        <source src="Resources/video.MOV" type="video/quicktime">
        <!-- Add additional video formats (e.g., WebM, Ogg) if needed -->
    </video>
    
    <div id="text-overlay">
        <h1 class="overlay">Default Text About Us</h1>
    </div>
  </div>
iv id="video-container">
    <video id="video" autoplay loop muted>
        <source src="Resources/video.MOV" type="video/quicktime">
        <!-- Add additional video formats (e.g., WebM, Ogg) if needed -->
    </video>
    
    <div id="text-overlay">
        <h1 class="overlay">Default Text About Us</h1>
    </div>
  </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events - Casa Blanca Hookah Lounge</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Casa Blanca Hookah Lounge</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Schedule and Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Upcoming Events</h1>
        <div class="row">
            <?php
            // Load events from JSON file
            $events = json_decode(file_get_contents('events.json'), true);

            // Display each event
            foreach ($events as $event) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($event['title']) . '</h5>';
                echo '<h6 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($event['date']) . '</h6>';
                echo '<p class="card-text">' . htmlspecialchars($event['description']) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
