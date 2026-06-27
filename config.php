<?php
// ===== DATABASE CONFIG =====
// XAMPP default settings (agar tumne change nahi kiya hai)
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "movie_finder";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Database connection fail ho gayi: " . $conn->connect_error);
}

// ===== OMDB API KEY =====
// Apni free API key yahan daalo: https://www.omdbapi.com/apikey.aspx
define('OMDB_API_KEY', 'c699cdd9');
?>
