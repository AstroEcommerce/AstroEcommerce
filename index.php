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
include_once './controllers/ProfileController.php';





$router = new Router();


$router->get('/about', 'AboutController@index' , 'about.index');
$router->get('/contact', 'ContactController@index' , 'contact.index');
$router->get('/auth/register', 'AuthController@registerPage' , 'auth.index');
$router->get('/auth/register-success', 'AuthController@registerSuccess' , 'auth.success');
$router->post('/auth/register', 'AuthController@register', 'auth.register');


$router->get('/auth/login', 'AuthController@loginPage', 'auth.loginPage');
$router->post('/auth/login', 'AuthController@login', 'auth.login');

$router->post('/auth/logout', 'AuthController@logout', 'auth.logout');

$router->get('/shop', 'ShopController@index', 'shop.index');

$router->get('/cart', 'CartController@index', 'cart.index');
$router->get('/checkout', 'CheckoutController@index', 'checkout.index');
$router->get('/checkout/complete', 'CheckoutController@complete', 'checkout.complete');

$router->get('/products/{id}', 'ProductController@item', 'product.item');

$router->get('/profile/{id}', 'ProfileController@index', 'profile.index');
$router->get('/profile/{id}/edit', 'ProfileController@edit', 'profile.edit');
$router->put('/profile/{id}/edit', 'ProfileController@update', 'profile.update');

  
// admin routes


$router->get('/admin', 'LoginController@index', 'admin.auth.loginPage');
$router->post('/admin', 'LoginController@login', 'admin.auth.login');
$router->post('/admin/logout', 'LoginController@logout', 'admin.auth.logout');

$router->get('/admin/dashboard', 'DashboardController@index', 'admin.dashboard.index');

$router->get('/admin/orders', 'OrdersController@index', 'admin.orders.index');
$router->get('/admin/orders/{id}/edit', 'OrdersController@editOrderStatus', 'admin.orders.edit');

$router->get('/admin/users', 'UsersController@index', 'admin.users.index');
$router->get('/admin/users/{id}/edit', 'UsersController@editUser', 'admin.users.edit');
$router->put('/admin/users/{id}/edit', 'UsersController@update', 'admin.users.update');
$router->delete('/admin/users/{id}', 'UsersController@delete', 'admin.users.delete');



$router->get('/admin/admins', 'AdminsController@index', 'admin.admins.index');
$router->get('/admin/admins/create', 'AdminsController@createAdmin', 'admin.admins.create');
$router->post('/admin/admins/create', 'AdminsController@store', 'admin.admins.store');
$router->get('/admin/admins/{id}/edit', 'AdminsController@editAdmin', 'admin.admins.edit');
$router->put('/admin/admins/{id}/edit', 'AdminsController@update', 'admin.admins.update');
$router->put('/admin/admins/{id}/edit/password', 'AdminsController@updatePassword', 'admin.admins.updatePassword');
$router->delete('/admin/admins/{id}', 'AdminsController@delete', 'admin.admins.delete');




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
