<?php

include_once './controllers/admin/BaseAdmin.php';

class OrdersController extends BaseAdmin
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