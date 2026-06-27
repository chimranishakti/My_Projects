<?php
// ===== DATABASE CONFIG =====
// Default XAMPP settings (change if you modified your MySQL setup)
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "movie_finder";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// ===== OMDB API KEY =====
// Get your free API key here: https://www.omdbapi.com/apikey.aspx
define('OMDB_API_KEY', 'c699cdd9');
?>
