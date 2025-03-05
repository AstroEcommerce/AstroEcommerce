<?php

include_once './controllers/Controller.php';

class AuthController extends Controller
{
    public function index()
    {
        $this->render('public.auth.auth');
    }

}