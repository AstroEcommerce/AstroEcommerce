<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AstruCures</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="stylesheet" href="/public/css/product.css">

    
</head>
<body >
  

<?php include_once('./views/layout/public/header.php'); ?>



<div class="container py-3">
        <div class="row ">
            <div class="col-md-6 text-center">
            <div class="product-image-container">
                <img src="/public/images/products/<?php echo $product['image_url']; ?>" 
                    alt="Elixir Bottle" class="product-image">
            </div>

            </div>

            <div class="col-md-6">
                <div class="card1">
                    <h2><?php echo $product['name']; ?></h2>
                    <p class="text-warning"><?php echo $product['category']; ?></p>
                    <p>⭐⭐⭐⭐⭐ (128 reviews)</p>
                    <h3> <?php echo $product['price']; ?> ASTRO</h3>
                    <div class="d-flex align-items-center my-3">
                        <button class="btn btn-outline-light">-</button>
                        <span class="mx-3">1</span>
                        <button class="btn btn-outline-light">+</button>
                    </div>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                    <div class="info-section mt-3">
                        <div class="info-box">
                            <i class="fa-solid fa-brain text-purple-400 mb-2"></i>
                            <p class="mb-1"><strong>Power Level</strong></p><p><?php echo $product['power_level']; ?></p>
                        </div>
                        <div class="info-box">
                            <i class="fa-solid fa-clock text-purple-400 mb-1"></i>
                            <p class="mb-1"><strong>Duration</strong></p> <p><?php echo $product['duration']; ?> Earth Hours</p>
                        
                        </div>
                    </div>
                    <p class="mt-3"><?php echo $product['description']; ?></p>

                </div>
            </div>
        </div>
    </div>


    <?php include_once('./views/layout/public/footer.php'); ?>





<script src="/public/js/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</body>
</html>