<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Finder</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="cover-body">

<div class="filmstrip filmstrip-top"></div>

<div class="cover-wrap">

    <p class="eyebrow">GENRE &middot; CAST &middot; STORY &mdash; IN ONE SEARCH</p>

    <h1 class="marquee-title">MOVIE<br>FINDER</h1>

    <p class="cover-tagline">Type any movie or show. Get its genre, lead cast,<br>and story summary &mdash; instantly.</p>

    <a href="search.php" class="cta-btn">Start Exploring &rarr;</a>

    <div class="cover-stats">
        <div class="stat">
            <span class="stat-num">&#127917;</span>
            <span class="stat-label">Genre</span>
        </div>
        <div class="stat">
            <span class="stat-num">&#127916;</span>
            <span class="stat-label">Lead Cast</span>
        </div>
        <div class="stat">
            <span class="stat-num">&#128214;</span>
            <span class="stat-label">Story Summary</span>
        </div>
        <div class="stat">
            <span class="stat-num">&#11088;</span>
            <span class="stat-label">Favorites</span>
        </div>
    </div>

</div>

<div class="filmstrip filmstrip-bottom"></div>

</body>
</html>
