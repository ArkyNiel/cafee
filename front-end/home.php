<?php

include '../scripts/config.php';
include '../back-end/apiUrls.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$searchQuery = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
$category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '';

$apiUrl = getApiUrl($category, $searchQuery, $page);

$movieData = @file_get_contents($apiUrl);
if ($movieData === false) {
    $movies = [];
    $totalPages = 1;
} else {
    $decodedData = json_decode($movieData, true);
    $movies = $decodedData['results'] ?? [];
    $totalPages = $decodedData['total_pages'] ?? 1;
}

$startPage = max(1, $page - 4);
$endPage = min($totalPages, $startPage + 9);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./components/css/carousel.css">
    <link rel="stylesheet" href="./components/css/footer.css">
    <link rel="stylesheet" href="./components/css/navbar.css">
    <link rel="stylesheet" href="./components/css/pagination.css">
    <link rel="stylesheet" href="./components/css/modal.css">
    <style>
        .card-img-top {
            height: 380px;
            object-fit: cover;
        }
        
    </style>
</head>
<body>
    <?php include './components/navbar.php'; ?>

    <!-- carousel -->
    <?php include './components/carousel.php'; ?>

    <!-- movie cards -->
    <div class="container mb-5">
        <h2 class="mt-5 mb-5">
            <?php 
            if ($searchQuery) {
                echo "Search: " . htmlspecialchars($searchQuery);
            } elseif ($category == 'action') {
                echo "Action Movies";
            } elseif ($category == 'tv') {
                echo "TV Series";
            } elseif ($category == 'cartoon') {
                echo "Cartoons";
            } else {
                echo "Suggested Movies for You";
            }
            ?>
        </h2>
        <div class="row justify-content-center">
            <?php if (!empty($movies)): ?>
                <?php foreach ($movies as $movie): ?>
                    <?php
                    // Check for 'poster_path', 'title' for movies, and 'name' for TV shows
                    $posterPath = isset($movie['poster_path']) ? htmlspecialchars($movie['poster_path']) : './img/default.jpg';
                    $title = isset($movie['title']) ? htmlspecialchars($movie['title']) : (isset($movie['name']) ? htmlspecialchars($movie['name']) : 'Title not available');
                    $overview = isset($movie['overview']) ? htmlspecialchars(substr($movie['overview'], 0, 100)) : 'No description available';
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal<?php echo $movie['id']; ?>">
                            <img
                                src="https://image.tmdb.org/t/p/w500<?php echo $posterPath; ?>"
                                class="card-img-top"
                                alt="<?php echo $title; ?>"
                            />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="card-text"><?php echo $overview; ?>...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <?php include './components/modal.php'; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No movies found.</p>
            <?php endif; ?>
        </div>

        <!-- pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination pagination-lg">
                    <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link text-primary" href="?category=<?php echo $category; ?>&search=<?php echo $searchQuery; ?>&page=<?php echo max(1, $page - 1); ?>">
                            <span aria-hidden="true">&laquo; Prev</span>
                        </a>
                    </li>
                    <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                            <a class="page-link <?php echo ($i == $page) ? 'bg-primary text-white' : 'text-primary'; ?>" href="?category=<?php echo $category; ?>&search=<?php echo $searchQuery; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?php echo ($page >= $totalPages) ? 'disabled' : ''; ?>">
                        <a class="page-link text-primary" href="?category=<?php echo $category; ?>&search=<?php echo $searchQuery; ?>&page=<?php echo min($totalPages, $page + 1); ?>">
                            <span aria-hidden="true">Next &raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Import -->
    <?php include './components/footer.php'; ?>
    <?php include './bootstrap/scripts.php'; ?>
</body>
</html>
