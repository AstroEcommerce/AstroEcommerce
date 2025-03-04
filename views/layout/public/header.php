<nav class="fixed-top navnav">
      <!-- Main Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark top-nav">
        <div class="container d-flex align-items-center justify-content-between mainNav">
          <!-- Toggler for Mobile & Logo -->
          <div class="d-flex align-items-center siteLogo">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Logo -->
            <a class="navbar-brand" href="#">
              <img
                src="/public/images/logo.png"
                width="100px"
                alt="logo"
                class="d-inline-block align-top"
              />
            </a>
          </div>
          <!-- Navigation Links -->
          <div class="collapse navbar-collapse justify-content-center siteLinks" id="navbarNav">
            <ul class="navbar-nav gap-lg-5 gap-3">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
              <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
          </div>
          <!-- Search Bar -->
          <form class="d-flex align-items-center siteSearch">
            <input
              class="form-control me-2 search-bar"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button title="Search" class="btn btn-outline-light" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <!-- Icons (Wishlist, Cart, Account) -->
          <ul class="navbar-nav ms-auto align-items-center siteIcons">
            <li class="nav-item">
              <a class="nav-link" href="#" title="Wishlist"><i class="fas fa-heart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Cart"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Account"><i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
            <a href="auth" class="btn login-btn btn-primary">Login</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Secondary Navbar (Bottom) -->
      <nav class="navbar navbar-expand-lg navbar-dark bottom-nav">
        <div class="container d-flex justify-content-center">
          <!-- Category Slider with Navigation Buttons -->
          <div class="d-flex align-items-center w-100">
            <button title="Scroll Left" class="btn btn-outline-light btn-sm scroll-left">
              <i class="fas fa-chevron-left"></i>
            </button>
            <div class="category-slider-container flex-grow-1 mx-2">
              <div class="category-slider">
                <a href="#" class="btn btn-outline-light mx-1">Physical Enhancements</a>
                <a href="#" class="btn btn-outline-light mx-1">Elemental Control</a>
                <a href="#" class="btn btn-outline-light mx-1">Mental and Psychic Abilities</a>
                <a href="#" class="btn btn-outline-light mx-1">Transformation and Shapeshifting</a>
                <a href="#" class="btn btn-outline-light mx-1">Dimensional and Spatial Manipulation</a>
                <a href="#" class="btn btn-outline-light mx-1">Biological and Healing Powers</a>
                <a href="#" class="btn btn-outline-light mx-1">Stealth and Invisibility</a>
                <a href="#" class="btn btn-outline-light mx-1">Animal and Nature-Based Powers</a>
                <a href="#" class="btn btn-outline-light mx-1">Memory and Knowledge-Based Powers</a>
                <a href="#" class="btn btn-outline-light mx-1">Category 10</a>
              </div>
            </div>
            <button title="Scroll Right" class="btn btn-outline-light btn-sm scroll-right">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </nav>
    </nav>