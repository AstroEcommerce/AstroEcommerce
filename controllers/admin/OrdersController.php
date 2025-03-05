<?php

include_once './controllers/Controller.php';
class OrdersController extends Controller
{
    
    
    public function editOrderStatus($id)
    {    
        
        $this->render('admin.orders.edit-status' , ['id' => $id]);
    }
    public function index()
    {
        $this->render('admin.orders.index');
    }

}