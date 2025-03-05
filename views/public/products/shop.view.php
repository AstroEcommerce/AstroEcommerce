<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="public/css/shop.css" />
    <link rel="stylesheet" href="public/css/style.css" />
    

  </head>
  <body style="margin-top: 110px;">
    
    <?php include_once 'views/layout/public/header.php'; ?>
    

    <div class="shop-bg py-3">
      <!-- <div class="container d-flex gap-5 justify-content-center ctg-container">
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-search"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="m16 16-1.9-1.9"/></svg>
          </div>
          <p>All</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dumbbell"><path d="M14.4 14.4 9.6 9.6"/><path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"/><path d="m21.5 21.5-1.4-1.4"/><path d="M3.9 3.9 2.5 2.5"/><path d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z"/></svg>
          </div>
          <p>Strength</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><path d="m10 20-1.25-2.5L6 18"/><path d="M10 4 8.75 6.5 6 6"/><path d="m14 20 1.25-2.5L18 18"/><path d="m14 4 1.25 2.5L18 6"/><path d="m17 21-3-6h-4"/><path d="m17 3-3 6 1.5 3"/><path d="M2 12h6.5L10 9"/><path d="m20 10-1.5 2 1.5 2"/><path d="M22 12h-6.5L14 15"/><path d="m4 10 1.5 2L4 14"/><path d="m7 21 3-6-1.5-3"/><path d="m7 3 3 6h4"/></svg>
          </div>
          <p>Elemental</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/><path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"/><path d="M17.599 6.5a3 3 0 0 0 .399-1.375"/><path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"/><path d="M3.477 10.896a4 4 0 0 1 .585-.396"/><path d="M19.938 10.5a4 4 0 0 1 .585.396"/><path d="M6 18a4 4 0 0 1-1.967-.516"/><path d="M19.967 17.484A4 4 0 0 1 18 18"/></svg>
          </div>
          <p>Psychic</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-boxes"><path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z"/><path d="m7 16.5-4.74-2.85"/><path d="m7 16.5 5-3"/><path d="M7 16.5v5.17"/><path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z"/><path d="m17 16.5-5-3"/><path d="m17 16.5 4.74-2.85"/><path d="M17 16.5v5.17"/><path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z"/><path d="M12 8 7.26 5.15"/><path d="m12 8 4.74-2.85"/><path d="M12 13.5V8"/></svg>
          </div>
          <p>Morph</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ruler"><path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"/><path d="m14.5 12.5 2-2"/><path d="m11.5 9.5 2-2"/><path d="m8.5 6.5 2-2"/><path d="m17.5 15.5 2-2"/></svg>
          </div>
          <p>Spatial</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>
          </div>
          <p>Healing</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ghost"><path d="M9 10h.01"/><path d="M15 10h.01"/><path d="M12 2a8 8 0 0 0-8 8v12l3-3 2.5 2.5L12 19l2.5 2.5L17 19l3 3V10a8 8 0 0 0-8-8z"/></svg>
          </div>
          <p>Stealth</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sprout"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg>
          </div>
          <p>Nature</p>
        </div>
        <div class="category">
          <div class="category-solo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain-circuit"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M9 13a4.5 4.5 0 0 0 3-4"/><path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"/><path d="M3.477 10.896a4 4 0 0 1 .585-.396"/><path d="M6 18a4 4 0 0 1-1.967-.516"/><path d="M12 13h4"/><path d="M12 18h6a2 2 0 0 1 2 2v1"/><path d="M12 8h8"/><path d="M16 8V5a2 2 0 0 1 2-2"/><circle cx="16" cy="13" r=".5"/><circle cx="18" cy="3" r=".5"/><circle cx="20" cy="21" r=".5"/><circle cx="20" cy="8" r=".5"/></svg>
          </div>
          <p>Memory</p>
        </div>
      </div> -->
      
      <!-- products -->
      
      <div class="container mt-5">
        <div class="row">
          <!-- Filter Section -->
          <div class="col-md-3">
            <div class="filter-section">
              <h5>Filters</h5>
              <!-- Search Input -->
              <div class="mb-3">
                <label for="searchInput" class="form-label">Search</label>
                <input type="text" id="searchInput" class="form-control" placeholder="Search products...">
              </div>
              <!-- Price Range -->
              <div class="mb-3">
                <label for="priceRange" class="form-label">Price Range</label>
                <input type="range" class="form-range" id="priceRange" min="0" max="1000" step="10">
                <span id="priceValue">$0 - $1000</span>
              </div>
              <!-- Categories -->
              <div class="mb-3">
                <label class="form-label">Categories</label>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Electronics" id="category1">
                    <label class="form-check-label" for="category1">Electronics</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Clothing" id="category2">
                    <label class="form-check-label" for="category2">Clothing</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Home" id="category3">
                    <label class="form-check-label" for="category3">Home</label>
                  </div>
                </div>
              </div>
              <!-- Duration -->
              <div class="mb-3">
                <label for="durationRange" class="form-label">Duration (1-10)</label>
                <input type="range" class="form-range" id="durationRange" min="1" max="10" step="1">
                <span id="durationValue">1</span>
              </div>
              <!-- Power Level -->
              <div class="mb-3">
                <label class="form-label">Power Level</label>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="powerLevel" value="Low" id="powerLow">
                    <label class="form-check-label" for="powerLow">Low</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="powerLevel" value="Medium" id="powerMedium">
                    <label class="form-check-label" for="powerMedium">Medium</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="powerLevel" value="High" id="powerHigh">
                    <label class="form-check-label" for="powerHigh">High</label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary w-100" onclick="applyFilters()">Apply Filters</button>
            </div>
          </div>
          <!-- Product Listing -->
           
          <div class="col-md-9 cards ">
            <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-around align-items-center " id="productList">
              <!-- Product Cards -->
              
              <?php if(empty($products)): ?>
                <p>No products available.</p>
              <?php else: ?>
                <?php foreach($products as $product): ?>
                  <?php include('./views/components/product.view.php'); ?>
                <?php endforeach; ?>
              <?php endif; ?>
              

              
            </div>
          </div>
        </div>
      </div>
    
      
      
      
      
      
      
      
    </div>

    <?php include_once 'views/layout/public/footer.php'; ?>
    
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Price Range Display
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    priceRange.addEventListener('input', () => {
      priceValue.textContent = `$0 - $${priceRange.value}`;
    });

    // Duration Range Display
    const durationRange = document.getElementById('durationRange');
    const durationValue = document.getElementById('durationValue');
    durationRange.addEventListener('input', () => {
      durationValue.textContent = durationRange.value;
    });

  </script>

    
    
    
    
    
    
    
    
    
    
    
    
    <script src="public/js/navbar.js"></script>

    <script>
      $(".buy").click(function () {
        $(".bottom").addClass("clicked");
      });

      $(".remove").click(function () {
        $(".bottom").removeClass("clicked");
      });
    </script>
  </body>
</html>
