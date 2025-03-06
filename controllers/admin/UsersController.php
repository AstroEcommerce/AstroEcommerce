<?php

include_once './controllers/admin/BaseAdmin.php';

class UsersController extends BaseAdmin
{
    
    
    public function editUser($id)
    {
        $this->render('admin.users.edit', ['id' => $id]);
    }
    public function index()
    {
        $this->render('admin.users.index');
    }

}
