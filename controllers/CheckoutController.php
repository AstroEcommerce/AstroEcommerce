<?php

require_once './models/products/Product.php';
include_once './controllers/Controller.php';
class CheckoutController extends Controller
{
    
    // public function getAll() {
    //     $product = $this->model('product');
    //     $products = $product->all();
    //     return $products;
    // }
    
    public function index()
    {

        $this->render('public.cart.checkout' , []); 
    }

}