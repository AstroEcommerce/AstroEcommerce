<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="public/css/checkout.css">

        <link rel="stylesheet" href="public/css/navbar.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/global.css">
        <link rel="stylesheet" href="public/css/variables.css">
    
</head>
<body>
  

<?php include_once('./views/layout/public/header.php'); ?>

    <div class="checkout container py-5">
        <h3 class="text-center"> Star Dust Elixirs</h3>
        <div class="row g-4 reverse">
            <div class="col-md-8">
                <div class="card p-4 mb-4">
                    <h5>Shipping Details</h5>
                    <div class="row g-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="First Name"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Last Name"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Planet/Galaxy"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Dimension Code"></div>
                        <div class="col-12"><input type="text" class="form-control" placeholder="Cosmic Address"></div>
                    </div>
                </div>
    
                <div class="card p-4">
                    <h5>Payment Method</h5>
                    <input type="text" class="form-control mb-2" placeholder="Card Number">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="MM/YY"></div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="CVC"></div>
                    </div>
                    <button class="btn w-100 mt-3"><i class="fa-solid fa-lock"></i> Pay Securely</button>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card p-4">
                    <h5>Order Summary</h5>
                    <p>Cosmic Flight Elixir<span class="float-end">₹2,500</span></p>
                    <p>Time Freeze Dust <span class="float-end">₹1,800</span></p>
                    <hr style="color: #8e54d9;">
                    <p>Subtotal <span class="float-end">₹4,300</span></p>
                    <p>Interstellar Shipping <span class="float-end">₹500</span></p>
                    <h5>Total <span class="float-end">₹4,800</span></h5>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once('./views/layout/public/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/navbar.js"></script>
</body>
</html>