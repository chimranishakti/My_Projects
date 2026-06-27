<?php
require 'config.php';

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM favorites WHERE id = $id");
    header("Location: favorites.php");
    exit();
}

$result = $conn->query("SELECT * FROM favorites ORDER BY saved_on DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Finder — Favorites</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="filmstrip filmstrip-top"></div>

<div class="navbar">
    <a href="index.php" class="brand">MOVIE <span>FINDER</span></a>
    <a href="search.php" class="nav-link">🔍 Search</a>
</div>

<div class="container">
    <h2 class="page-title">⭐ My Saved Movies</h2>

    <?php if ($result->num_rows == 0): ?>
        <p class="error">You haven't saved any movies yet. Search for a movie and save it!</p>
    <?php endif; ?>

    <div class="favorites-grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="fav-card">
                <?php if ($row['poster'] != "N/A" && $row['poster'] != ""): ?>
                    <img src="<?php echo htmlspecialchars($row['poster']); ?>" alt="Poster">
                <?php else: ?>
                    <div class="no-poster">No Image</div>
                <?php endif; ?>

                <div class="fav-info">
                    <h3><?php echo htmlspecialchars($row['title']); ?> (<?php echo htmlspecialchars($row['year']); ?>)</h3>
                    <p><b>Genre:</b> <?php echo htmlspecialchars($row['genre']); ?></p>
                    <p><b>Actors:</b> <?php echo htmlspecialchars($row['actors']); ?></p>
                    <p class="plot"><?php echo htmlspecialchars(substr($row['plot'], 0, 120)); ?>...</p>
                    <a href="favorites.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Remove this movie?')">🗑 Remove</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<div class="filmstrip filmstrip-bottom"></div>

</body>
</html>
