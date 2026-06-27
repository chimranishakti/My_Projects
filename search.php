<?php
require 'config.php';

$movie = null;
$error = "";

if (isset($_GET['title']) && trim($_GET['title']) != "") {
    $title = urlencode(trim($_GET['title']));
    $url = "https://www.omdbapi.com/?t=" . $title . "&apikey=" . OMDB_API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['Response']) && $data['Response'] == "True") {
        $movie = $data;
    } else {
        $error = "Movie not found. Please check the spelling or try a different title.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Finder — Search</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="filmstrip filmstrip-top"></div>

<div class="navbar">
    <a href="index.php" class="brand">MOVIE <span>FINDER</span></a>
    <a href="favorites.php" class="nav-link">★ My Favorites</a>
</div>

<div class="container">

    <form method="GET" class="search-box">
        <input type="text" name="title" placeholder="Enter a movie name... e.g. Inception" 
               value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : ''; ?>" required>
        <button type="submit">Search</button>
    </form>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($movie): ?>
        <div class="movie-card">
            <div class="poster">
                <?php if ($movie['Poster'] != "N/A"): ?>
                    <img src="<?php echo htmlspecialchars($movie['Poster']); ?>" alt="Poster">
                <?php else: ?>
                    <div class="no-poster">No Image</div>
                <?php endif; ?>
            </div>

            <div class="details">
                <h2><?php echo htmlspecialchars($movie['Title']); ?> (<?php echo htmlspecialchars($movie['Year']); ?>)</h2>

                <p><span class="label">Type:</span> 
                    <?php echo htmlspecialchars(ucfirst($movie['Type'])); ?>
                </p>

                <p><span class="label">Genre:</span> 
                    <?php echo htmlspecialchars($movie['Genre']); ?>
                </p>

                <p><span class="label">Lead Actors:</span> 
                    <?php echo htmlspecialchars($movie['Actors']); ?>
                </p>

                <p><span class="label">IMDB Rating:</span> 
                    ⭐ <?php echo htmlspecialchars($movie['imdbRating']); ?> / 10
                </p>

                <p><span class="label">Story Summary:</span><br>
                    <?php echo htmlspecialchars($movie['Plot']); ?>
                </p>

                <form method="POST" action="save.php">
                    <input type="hidden" name="title" value="<?php echo htmlspecialchars($movie['Title']); ?>">
                    <input type="hidden" name="year" value="<?php echo htmlspecialchars($movie['Year']); ?>">
                    <input type="hidden" name="genre" value="<?php echo htmlspecialchars($movie['Genre']); ?>">
                    <input type="hidden" name="actors" value="<?php echo htmlspecialchars($movie['Actors']); ?>">
                    <input type="hidden" name="plot" value="<?php echo htmlspecialchars($movie['Plot']); ?>">
                    <input type="hidden" name="poster" value="<?php echo htmlspecialchars($movie['Poster']); ?>">
                    <input type="hidden" name="type" value="<?php echo htmlspecialchars($movie['Type']); ?>">
                    <button type="submit" class="save-btn">⭐ Save to Favorites</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

</div>

<div class="filmstrip filmstrip-bottom"></div>

</body>
</html>
