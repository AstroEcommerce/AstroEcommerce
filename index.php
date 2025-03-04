<?php

include_once './helpers/functions.php';
include_once './config/Router.php';
include_once './controllers/AboutController.php';
include_once './controllers/ProductController.php';
include_once './controllers/ContactController.php';
include_once './controllers/AuthController.php';
include_once './controllers/ShopController.php';
include_once './controllers/CartController.php';
include_once './controllers/CheckoutController.php';


$router = new Router();


$router->get('/about', 'AboutController@index' , 'about.index');
$router->get('/contact', 'ContactController@index' , 'contact.index');
$router->get('/auth', 'AuthController@index' , 'auth.index');

$router->get('/shop', 'ShopController@index', 'shop.index');

$router->get('/cart', 'CartController@index', 'cart.index');
$router->get('/checkout', 'CheckoutController@index', 'checkout.index');

$router->get('/products/{id}', 'ProductController@item', 'product.item');



$router->dispatch();




?>
