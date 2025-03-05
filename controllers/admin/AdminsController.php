<?php

include_once './controllers/Controller.php';
class AdminsController extends Controller
{
    
    public function editAdmin($id)
    {
        $this->render('admin.admins.edit', ['id' => $id]);
    }

    
    public function createAdmin()
    {
        $this->render('admin.admins.create');
    }
    
    
    public function index()
    {
        $this->render('admin.admins.index');
    }

}
