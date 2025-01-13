<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Movies</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarSupportedContent"
    >
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?category=action">Action</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?category=animation">Anime</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?category=tv-series">TV Series</a>
        </li>
        <!-- Dropdown for Genres -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genres
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?category=adventure">Adventure</a></li>
            <li><a class="dropdown-item" href="?category=romance">Romance</a></li>
            <li><a class="dropdown-item" href="?category=comedy">Comedy</a></li>
            <li><a class="dropdown-item" href="?category=crime">Crime</a></li>
            <li><a class="dropdown-item" href="?category=horror">Horror</a></li>
            <li><a class="dropdown-item" href="?category=fantasy">Fantasy</a></li>
            <li><a class="dropdown-item" href="?category=drama">Drama</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <form class="d-flex ms-auto" role="search" method="GET" action="home.php">
      <input
        class="form-control me-2"
        type="search"
        name="search"
        placeholder="Search"
        aria-label="Search"
        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
      />
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
