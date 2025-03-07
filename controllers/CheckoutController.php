<?php

require_once './models/products/Product.php';
include_once './controllers/Controller.php';
class CheckoutController extends Controller
{
    
    
    
    public function index()
    {
        $this->render('public.cart.checkout' , []); 
    }
    
    
    
    public function complete()
    {
        $this->render('public.cart.complete' ); 
    }

}