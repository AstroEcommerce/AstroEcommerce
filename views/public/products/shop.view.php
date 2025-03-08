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
      
    <?php if(isset($_SESSION['flash_error'])): ?> 
      <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="width: auto; z-index: 1050; transition: transform 0.3s ease; transform: translateY(-50px);">
        <?php echo $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <?php if(isset($_SESSION['flash_success'])): ?> 
      <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="width: auto; z-index: 1050; transition: transform 0.3s ease; transform: translateY(-50px);">
        <?php echo $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <script>
      document.querySelectorAll('.alert').forEach(alert => {
        setTimeout(() => {
          alert.style.transform = 'translateY(0)';
        }, 100);
      });
    </script>
    
  
      <!-- products -->
      
      <div class="container mt-5">
        <div class="row">
          <!-- Filter Section -->
          <div class="col-md-3">
            
            <div class="filter-section">
               <div class="d-flex justify-content-between align-items-center"> <h5>Filters</h5> <a href="/shop" class="ms-2 text-decoration-none">Reset</a></div>
              <form method="get" action="/shop">
              <!-- Search Input -->
                <div class="mb-3">
                <label for="searchInput" class="form-label">Search</label>
                <input type="text" id="searchInput" name="search" class="form-control" placeholder="Search products..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                </div>
                <!-- Price Range -->
                <div class="mb-3">
                <label for="priceRange" class="form-label">Price Range</label>
                <input type="range" class="form-range" id="priceRange" name="priceRange" min="0" max="350" step="10" value="<?php echo isset($_GET['priceRange']) ? htmlspecialchars($_GET['priceRange']) : '350'; ?>">
                <span id="priceValue">$0 - <?php echo isset($_GET['priceRange']) ? htmlspecialchars($_GET['priceRange']) : '350'; ?></span>
                </div>
                <!-- Categories -->
                <div class="mb-3">
                <label class="form-label">Categories</label>
                <div>
                <?php
                $categories = [
                  1 => 'Physical',
                  2 => 'Elemental',
                  3 => 'Mental and Psychic',
                  4 => 'Transformation',
                  5 => 'Dimensional Manipulation',
                  6 => 'Biological Powers',
                  7 => 'Invisibility',
                  8 => 'Nature-Based Powers',
                  9 => 'Memory and Knowledge'
                ];
                foreach ($categories as $id => $label) {
                  $checked = isset($_GET["category$id"]) ? 'checked' : '';
                  echo "<div class='form-check'>
                      <input class='form-check-input' type='checkbox' value='$id' id='category$id' name='category$id' $checked>
                      <label class='form-check-label' for='category$id'>$label</label>
                    </div>";
                }
                ?>
                </div>
                </div>
                <!-- Duration -->
                <div class="mb-3">
                <label for="durationRange" class="form-label">Duration (1-10)</label>
                <input type="range" class="form-range" id="durationRange" name="duration" min="1" max="10" step="1" value="<?php echo isset($_GET['duration']) ? htmlspecialchars($_GET['duration']) : '1'; ?>">
                <span id="durationValue"><?php echo isset($_GET['duration']) ? htmlspecialchars($_GET['duration']) : 'Pick Duration'; ?></span>
                </div>
                <!-- Power Level -->
                <div class="mb-3">
                <label class="form-label">Power Level</label>
                <div>
                <?php
                $powerLevels = ['Low', 'Medium', 'High'];
                foreach ($powerLevels as $level) {
                  $checked = isset($_GET['powerLevel']) && $_GET['powerLevel'] === $level ? 'checked' : '';
                  echo "<div class='form-check'>
                      <input class='form-check-input' type='radio' name='powerLevel' value='$level' id='power$level' $checked>
                      <label class='form-check-label' for='power$level'>$level</label>
                    </div>";
                }
                ?>
                </div>
                
              </div>
              <button class="btn btn-primary w-100" type="submit">Apply Filters</button>
              </form>
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
      priceValue.textContent = `$0 - ${priceRange.value}`;
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
