<?php

include_once './controllers/Controller.php';
class LoginController extends Controller
{
    public function index()
    {
        $this->render('admin.auth.login');
    }

}