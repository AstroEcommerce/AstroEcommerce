<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmic Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
        
        <link rel="stylesheet" href="public/css/cart.css">
        <link rel="stylesheet" href="public/css/navbar.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/global.css">
        
        
</head>
<body >

<?php include_once('./views/layout/public/header.php'); ?>


    <div class="container cart-container">
        <h2 class="text-center">Your Cosmic Cart</h2>
        <p class="text-center">3 items in your cart</p>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card total-box" >
                    <div class="row">
                        <div class="col-sm-2 product-image-container">
                            <img src="public/images/elex1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 text-white">
                            <h5>Time Manipulation Crystal</h5>
                            <p>Dimensional & Spatial Manipulation</p>
                            <div class="d-flex quantity align-items-center">
                                <button class="btn btn-outline-light btn-sm border-0">-</button>
                                <input type="text" value="1" class="form-control form-control-sm mx-2 input-design "
                                    maxlength="1" disabled>
                                <button class="btn btn-outline-light btn-sm border-0">+</button>
                                <div class="d-flex align-items-center ms-2">
                                    <p> 12,999 Credits</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-end">
                            <button class="btn btn-sm "> <i class="fa-solid fa-trash text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card total-box">
                    <div class="row">
                        <div class="col-sm-2 product-image-container">
                            <img src="public/images/elex2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 text-white">
                            <h5>Time Manipulation Crystal</h5>
                            <p>Dimensional & Spatial Manipulation</p>
                            <div class="d-flex quantity">
                                <button class="btn btn-outline-light btn-sm border-0">-</button>
                                <input type="text" value="1" class="form-control form-control-sm mx-2 input-design "
                                    maxlength="1" disabled>
                                <button class="btn btn-outline-light btn-sm border-0">+</button>
                                <div class="d-flex align-items-center ms-2">
                                    <p> 12,999 Credits</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-end">
                            <button class="btn btn-sm "> <i class="fa-solid fa-trash text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card total-box">
                    <div class="row">
                        <div class="col-sm-2 product-image-container">
                            <img src="public/images/products/beast_form.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 text-white">
                            <h5>Time Manipulation Crystal</h5>
                            <p>Dimensional & Spatial Manipulation</p>
                            <div class="d-flex quantity">
                                <button class="btn btn-outline-light btn-sm border-0">-</button>
                                <input type="text" value="1" class="form-control form-control-sm mx-2 input-design" maxlength="1" disabled>
                                <button class="btn btn-outline-light btn-sm border-0">+</button>
                                <div class="d-flex align-items-center ms-2">
                                    <p> 12,999 Credits</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 d-flex align-items-center justify-content-end">
                            <button class="btn btn-sm "> <i class="fa-solid fa-trash text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="total-box">
            <p>Subtotal: <span class="float-end">17,998 Credits</span></p>
            <p>Interstellar Shipping: <span class="float-end">499 Credits</span></p>
            <hr>
            <p>Total: <span class="float-end">18,497 Credits</span></p>
            <p class="text-muted">🚀 Estimated Delivery: 2-3 Light Years (Standard Shipping)</p>
        </div>

        <a href="#" class="checkout-btn">Proceed to Checkout</a>
    </div>
    
    
    <?php include_once('./views/layout/public/footer.php'); ?>
    
    <script src="public/js/navbar.js"></script>
    
</body>

</html>