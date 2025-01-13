<?php
function getApiUrl($category, $searchQuery, $page = 1) {
    $apiUrl = '';

    if ($category == 'adventure') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=12&language=en-US&page=" . $page;
    } elseif ($category == 'animation') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=16&language=en-US&page=" . $page;
    } elseif ($category == 'romance') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=10749&language=en-US&page=" . $page;
    } elseif ($category == 'comedy') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=35&language=en-US&page=" . $page;
    } elseif ($category == 'crime') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=80&language=en-US&page=" . $page;
    } elseif ($category == 'horror') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=27&language=en-US&page=" . $page;
    } elseif ($category == 'fantasy') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=14&language=en-US&page=" . $page;
    } elseif ($category == 'drama') {
        $apiUrl = "https://api.themoviedb.org/3/discover/movie?api_key=" . API_KEY . "&with_genres=18&language=en-US&page=" . $page;
    } elseif ($category == 'tv-series') {
        $apiUrl = "https://api.themoviedb.org/3/discover/tv?api_key=" . API_KEY . "&language=en-US&page=" . $page;
    } elseif ($searchQuery) {
        $apiUrl = "https://api.themoviedb.org/3/search/movie?api_key=" . API_KEY . "&query=" . urlencode($searchQuery) . "&language=en-US&page=" . $page;
    } else {
        $apiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=" . API_KEY . "&language=en-US&page=" . $page;
    }

    return $apiUrl;
}

?>
