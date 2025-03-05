<?php

include_once './controllers/Controller.php';
class DashboardController extends Controller
{
    public function index()
    {
        $this->render('admin.dashboard.dashboard');
    }

}