<div class="modal fade" id="movieModal<?php echo $movie['id']; ?>" tabindex="-1" aria-labelledby="movieModalLabel<?php echo $movie['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="movieModalLabel<?php echo $movie['id']; ?>">
          <?php
            if (isset($movie['title']) && !empty($movie['title'])) {
                echo htmlspecialchars($movie['title']);
            } else {
                echo 'Title not available';
            }
          ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white;"></button>
      </div>
      <div class="modal-body" style="position: relative; padding-bottom: 60px; padding-top: 40px;">
        <img src="<?php echo isset($movie['poster_path']) && !empty($movie['poster_path']) && strpos($movie['poster_path'], '/') === 0 ? 'https://image.tmdb.org/t/p/w500' . htmlspecialchars($movie['poster_path']) : 'default-image-path.jpg'; ?>" class="img-fluid" alt="<?php echo isset($movie['title']) ? htmlspecialchars($movie['title']) : 'No title available'; ?>" />
        <div class="movie-text">
          <div class="scrollable-text">
            <p><?php echo isset($movie['overview']) ? htmlspecialchars($movie['overview']) : 'No description available'; ?></p>
          </div>
        </div>
        <!-- Link that opens the movie player page in a new tab -->
        <a href="movie_player.php?id=<?php echo $movie['id']; ?>" class="btn btn-success" target="_blank" style="position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%);">Play</a>
      </div>
    </div>
  </div>
</div>
