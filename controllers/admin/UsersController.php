<?php

include_once './controllers/Controller.php';
class UsersController extends Controller
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
