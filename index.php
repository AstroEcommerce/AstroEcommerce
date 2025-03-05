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
include_once './controllers/admin/LoginController.php';
include_once './controllers/admin/DashboardController.php';
include_once './controllers/admin/OrdersController.php';
include_once './controllers/admin/UsersController.php';
include_once './controllers/admin/AdminsController.php';
include_once './controllers/admin/ProductsController.php';
include_once './controllers/admin/CategoriesController.php';







$router = new Router();


$router->get('/about', 'AboutController@index' , 'about.index');
$router->get('/contact', 'ContactController@index' , 'contact.index');
$router->get('/auth', 'AuthController@index' , 'auth.index');

$router->get('/shop', 'ShopController@index', 'shop.index');

$router->get('/cart', 'CartController@index', 'cart.index');
$router->get('/checkout', 'CheckoutController@index', 'checkout.index');

$router->get('/products/{id}', 'ProductController@item', 'product.item');


  
// admin routes
$router->get('/admin', 'LoginController@index', 'admin.auth.login');
$router->get('/admin/dashboard', 'DashboardController@index', 'admin.dashboard.index');

$router->get('/admin/orders', 'OrdersController@index', 'admin.orders.index');
$router->get('/admin/orders/{id}/edit', 'OrdersController@editOrderStatus', 'admin.orders.edit');

$router->get('/admin/users', 'UsersController@index', 'admin.users.index');
$router->get('/admin/users/{id}/edit', 'UsersController@editUser', 'admin.users.edit');


$router->get('/admin/admins', 'AdminsController@index', 'admin.admins.index');
$router->get('/admin/admins/create', 'AdminsController@createAdmin', 'admin.admins.create');
$router->get('/admin/admins/{id}/edit', 'AdminsController@editAdmin', 'admin.admins.edit');




$router->get('/admin/products', 'ProductsController@index', 'admin.products.index');
$router->get('/admin/products/create', 'ProductsController@createProductPage', 'admin.products.createPage');
$router->post('/admin/products/create', 'ProductsController@store', 'admin.products.create');
$router->get('/admin/products/{id}/edit', 'ProductsController@editProduct', 'admin.products.editPage');
$router->put('/admin/products/{id}/edit', 'ProductsController@update', 'admin.products.edit');
$router->delete('/admin/products/{id}', 'ProductsController@delete', 'admin.products.delete');


$router->get('/admin/categories', 'CategoriesController@index', 'admin.categories.index');
$router->get('/admin/categories/create', 'CategoriesController@createCategory', 'admin.categories.create');
$router->post('/admin/categories/create', 'CategoriesController@storeCategory', 'admin.categories.store');
$router->get('/admin/categories/{id}/edit', 'CategoriesController@editCategory', 'admin.categories.edit');
$router->put('/admin/categories/{id}/edit', 'CategoriesController@update', 'admin.categories.update');
$router->delete('/admin/categories/{id}', 'CategoriesController@delete', 'admin.categories.delete');




$router->dispatch();

?>
