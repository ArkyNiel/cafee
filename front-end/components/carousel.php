<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach (array_slice($movies, 0, 5) as $index => $movie): ?>
      <?php
        // Ensure necessary data exists before accessing it
        $backdropPath = isset($movie['backdrop_path']) ? htmlspecialchars($movie['backdrop_path']) : null;
        $title = isset($movie['title']) ? htmlspecialchars($movie['title']) : (isset($movie['name']) ? htmlspecialchars($movie['name']) : 'Title not available');
        $overview = isset($movie['overview']) ? htmlspecialchars(substr($movie['overview'], 0, 100)) : 'No description available';
      ?>
      <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
        <img 
          srcset="<?php echo $backdropPath ? "https://image.tmdb.org/t/p/w780{$backdropPath} 780w, 
                https://image.tmdb.org/t/p/w1280{$backdropPath} 1280w, 
                https://image.tmdb.org/t/p/original{$backdropPath} 1920w" : './img/default.jpg'; ?>"
          sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 75vw"
          class="d-block w-100"
          alt="<?php echo $title; ?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $title; ?></h5>
          <p><?php echo $overview; ?>...</p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
