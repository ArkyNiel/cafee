<?php
include '../scripts/config.php';

$base_url = 'https://api.themoviedb.org/3';

function fetchMovieById($movieId) {
    global $base_url;
    $url = "{$base_url}/movie/{$movieId}?api_key=" . API_KEY . "&language=en-US";
    $response = @file_get_contents($url);

    if ($response === false) {
        return null;
    }

    $data = json_decode($response, true);
    if (isset($data['status_code']) && $data['status_code'] === 34) {
        return null;
    }

    return $data;
}

function fetchMovieVideos($movieId) {
    global $base_url;
    $url = "{$base_url}/movie/{$movieId}/videos?api_key=" . API_KEY . "&language=en-US";
    $response = @file_get_contents($url);

    if ($response === false) {
        return null;
    }

    $videos = json_decode($response, true);
    return isset($videos['results'][0]) ? $videos['results'][0] : null;
}

$movieId = isset($_GET['id']) ? $_GET['id'] : 0;
$movie = fetchMovieById($movieId);

if (!$movie) {
    echo "Movie not found.";
    exit;
}

$video = fetchMovieVideos($movieId);
$videoUrl = $video ? "https://www.youtube.com/watch?v=" . $video['key'] : 'default-video-url';
?>
