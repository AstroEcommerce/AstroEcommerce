<?php


require_once './models/products/Product.php';
include_once './controllers/Controller.php';

class HomeController extends Controller
{
  

    public function bestSellers()
    {
        $product = $this->model('product');
        $bestSellers = $product->ten();
        return $bestSellers;
    }
    
    public function newArrivals()
    {
        $productModel = new Product();
        $newArrivals = $productModel->lastTen();
        
        return $newArrivals;
    }
    
    
    public function index()
    {
        
        $bestSellers = $this->bestSellers();
        $newArrivals = $this->newArrivals();
        // require_once './views/home/index.view.php';
        $this->render('public.pages.home', ['bestSellers' => $bestSellers , 'newArrivals' => $newArrivals ]);
    }

}
