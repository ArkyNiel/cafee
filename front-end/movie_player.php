<?php include '../back-end/movie_player.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Movie - <?php echo htmlspecialchars($movie['title']); ?></title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/movie_player.css" />
    <link rel="stylesheet" href="./components/css/footer.css">
</head>
<body>
    <div class="container movie-container mb-5">
        <h1 class="movie-title mb-5"><?php echo htmlspecialchars($movie['title']); ?></h1>
        <div class="movie-content">
            <div class="movie-image mt-0 m-5">
                <img src="https://image.tmdb.org/t/p/w500<?php echo htmlspecialchars($movie['poster_path']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>" class="img-fluid rounded shadow mb-4">
                <a href="<?php echo $videoUrl; ?>" target="_blank" class="btn btn-primary btn-lg btn-trailer">Watch Now</a>
            </div>
            <div class="movie-details">
                <h3>Overview:</h3>
                <p><?php echo isset($movie['overview']) ? htmlspecialchars($movie['overview']) : 'No description available'; ?></p>
            </div>
        </div>
        <?php if ($video): ?>
        <div class="movie-trailer">
            <h3>Trailer:</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video['key']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- footer -->
    <?php include './components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
