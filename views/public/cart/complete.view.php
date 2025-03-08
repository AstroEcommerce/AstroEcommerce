<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/footer.css">
    <style>
        body {
            background: #000924;
            color: white;
            text-align: center;
            margin-top: 150px !important;
        }


        @media (max-width: 768px) {
            body {
                margin-top: 200px !important;
            }
            
            .row {
                gap: 15px !important; 
            }
        }

        

        .card {
            background: #0d162f;

    <style>
        body {
            background: #1b1b3a;
            color: white;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .card {
            background: #292952;

            border: none;
            color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-card {

            background: #0d162f;

            background: #292952;

            border: none;
            color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .btn-card i {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .btn-card h5 {
            margin: 0;
            font-size: 1.1rem;
        }
        .text-center h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .text-center p {
            font-size: 1.2rem;
            color: #a9a9a9;
        }
        .card h4 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        .card h6 {
            font-size: 1.1rem;
            color: #6b47e2;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 1rem;
            color: #d3d3d3;
        }
    </style>
</head>
<body>

    
    <?php include_once('./views/layout/public/header.php'); ?>


    <div class="container">
        <div class="text-center mb-5">
            <h2>✔ Order Confirmed!</h2>
            <p>Your cosmic powers are on the way to you</p>
        </div>
        
        <div class="card p-4 mb-4">

            <h4>Order #<?php echo date('Y') . 'X-' . $order_id ?></h4>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Estimated Delivery</h6>
                    <p><strong><?php echo date('F j, Y', strtotime('+7 days')) ?></strong></p>
                    <p>Via BlackHole Express</p>
                </div>
                <div class="col-md-4">
                    <h6>Shipping Address</h6>
                    <p><strong><?php echo isset($name) ?  $name : ''; ?></strong></p>
                    <p><?php echo isset($shipping_address) ? $shipping_address : ''; ?></p>
                </div>
                <div class="col-md-4">
                    <h6>Payment Method</h6>
                    <p><strong>Cash on Delivery</strong></p>

            <h4>Order #2025X-089</h4>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Estimated Delivery</h6>
                    <p><strong>March 15, 2025</strong></p>
                    <p>Via Intergalactic Express</p>
                </div>
                <div class="col-md-4">
                    <h6>Shipping Address</h6>
                    <p><strong>John Doe</strong></p>
                    <p>Space Station Alpha, Mars Colony, Solar System</p>
                </div>
                <div class="col-md-4">
                    <h6>Payment Method</h6>
                    <p><strong>Cosmic Credits</strong></p>
                    <p>****-****-****-4242</p>

                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="btn-card">
                    <i class="fas fa-map-marked-alt"></i>
                    <h5>Track Order</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-card">
                    <i class="fas fa-file-invoice"></i>
                    <h5>View Invoice</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-card">
                    <i class="fas fa-question-circle"></i>
                    <h5>Need Help?</h5>
                </div>
            </div>
        </div>
    </div>
    

    <?php include_once('./views/layout/public/footer.php'); ?>
    <script src="/public/js/navbar.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>