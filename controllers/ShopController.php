<?php

require_once './models/products/Product.php';
include_once './controllers/Controller.php';
class ShopController extends Controller
{
    
    public function getAll() {
        $product = $this->model('product');
        $products = $product->all();
        return $products;
    }
    
    public function index()
    {
        $products = $this->getAll();
        $this->render('public.products.shop' , ['products' => $products]);
    }

}