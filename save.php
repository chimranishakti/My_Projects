<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title  = $_POST['title'];
    $year   = $_POST['year'];
    $genre  = $_POST['genre'];
    $actors = $_POST['actors'];
    $plot   = $_POST['plot'];
    $poster = $_POST['poster'];
    $type   = $_POST['type'];

    $stmt = $conn->prepare("INSERT INTO favorites (title, year, genre, actors, plot, poster, type) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $title, $year, $genre, $actors, $plot, $poster, $type);
    $stmt->execute();
    $stmt->close();

    header("Location: favorites.php");
    exit();
}
?>
