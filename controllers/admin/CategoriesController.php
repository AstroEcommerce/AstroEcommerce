<?php

include_once './controllers/Controller.php';
class CategoriesController extends Controller
{
    
    
    public function createCategory()
    {
        $this->render('admin.categories.create');
    }
    public function editCategory($id)
    {
        $this->render('admin.categories.edit', ['id' => $id]);
    }
    public function index()
    {
        $this->render('admin.categories.index');
    }

}
