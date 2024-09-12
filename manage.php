<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Load data from JSON files
$events = json_decode(file_get_contents('events.json'), true);
$announcements = json_decode(file_get_contents('announcements.json'), true);

// Handle new event submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_event'])) {
    $new_event = [
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'description' => $_POST['description']
    ];
    $events[] = $new_event;
    file_put_contents('events.json', json_encode($events));
}

// Handle new announcement submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_announcement'])) {
    $new_announcement = [
        'message' => $_POST['message'],
        'date' => $_POST['date']
    ];
    $announcements[] = $new_announcement;
    file_put_contents('announcements.json', json_encode($announcements));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Events and Announcements</title>
</head>
<body>
    <h1>Manage Events</h1>
    <form method="post">
        <input type="hidden" name="new_event" value="1">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit">Add Event</button>
    </form>

    <h1>Manage Announcements</h1>
    <form method="post">
        <input type="hidden" name="new_announcement" value="1">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <button type="submit">Add Announcement</button>
    </form>
</body>
</html>
