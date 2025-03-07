<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/profile.css">
</head>
<body>
    <?php include_once('./views/layout/public/header.php'); ?>

    <div id="container-whole" class="container-fluid d-flex flex-column gap-3 p-5">
        <!-- Profile Info Section -->
        <div id="info" class="div-adjustment p-4">
            <div class="d-flex align-items-center gap-4">
                <img class="info_img" src="/public/images/profile.jpg" alt="">
                <div id="info_details" class="d-flex flex-column justify-content-center">
                    <h2 class="text-font"><?php echo $_SESSION['user']['name'] ?></h2>
                    <p class="text-font"><?php echo $_SESSION['user']['email'] ?></p>
                    <a class="text-decoration-none  rounded-5 mt-1 py-2 px-3 bg-button-a" href="/profile/<?php echo $_SESSION['user']['id'] ?>/edit">Edit Profile</a>
                </div>
            </div>
        </div>

         <!-- Orders Section -->
         <div id="orders" class="div-adjustment p-4">
            <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-light">Current Cart</h2>
                    <a class="text-decoration-none text-light rounded-5 pe-2 ps-2 bg-button-a" href="">3 items</a>
                </div>
                <div class="d-flex flex-start align-items-center rounded-3 p-3" style="background-color: #000924;">
                    <img class="info_img-current" src="/images/pill4.jpg" alt="Product Image">
                    <div id="current-info" class="d-flex w-100 justify-content-around align-items-center p-3 gap-3">
                        <div>
                            <h5 class="text-light">Nova X Gaming Headset</h5>
                            <p class="text-light">$299.99</p>
                        </div>
                        <div class="d-flex gap-3">
                            <a class="text-decoration-none text-light" href="">-</a>
                            <p class="text-light">1</p>
                            <a class="text-decoration-none text-light" href="">+</a>
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none text-light a-current" href="">View Cart</a>
            </div>
        </div>

        <!-- Orders History Section -->
        <div id="orders_history" class="div-adjustment p-4">
            <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-light">Recent Orders</h2>
                    <a class="text-decoration-none text-light rounded-5 pe-2 ps-2 bg-button-a" href="">View All</a>
                </div>
                <div class="d-flex flex-start align-items-center rounded-3 p-3" style="background-color: #000924;">
                    <div class="d-flex flex-column gap-3 w-100 p-2 m-2 justify-content-around align-items-center">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h5 class="text-light">Order #NEMOC29</h5>
                                <p style="color: #7e6bf5;">March 15, 2025</p>
                            </div>
                            <div>
                                <p class="text-decoration-none rounded-5 status-Deliver">Delivered</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <p class="text-light">3 items</p>
                            <p style="color: #7e6bf5;">$299.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wishlist Section -->
        <div id="wishlist" class="div-adjustment p-4">
            <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="text-light">Wishlist</h5>
                    <a class="text-decoration-none d-flex justify-content-center align-items-center text-success rounded-5 pe-2 ps-2 bg-button-a" href="">View All</a>
                </div>
                <div id="wishList-card" class="d-flex flex-column justify-content-around align-items-center">
                    <img class="wishList-card-img" src="/images/12345.jpg" alt="Wishlist Item">
                    <div class="wishList-card-info">
                        <h4 class="text-light">Name</h4>
                        <p class="text-light">$299.99</p>
                    </div>
                    <a class="text-decoration-none text-light a-current" href="">View Cart</a>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('./views/layout/public/footer.php'); ?>

    <script src="/public/js/navbar.js"></script>
</body>
</html>