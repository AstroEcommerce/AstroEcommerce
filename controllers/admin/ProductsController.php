<?php

include_once './controllers/Controller.php';
include_once './models/products/Product.php';

class ProductsController extends Controller
{
    
    
    public function createProductPage()
    {
        $product = $this->model('product');
        $categories = $product->getCategories();
        $this->render('admin.products.create' , ['categories' => $categories]);
    }
    
    public function store()
    {   
        $name = $_POST['name'] ?? null;
        $price = $_POST['price'] ?? null;
        $description = $_POST['description'] ?? null;
        $image_url = $_POST['image_url'] ?? null;
        $duration = $_POST['duration'] ?? null;
        $power_level = $_POST['power_level'] ?? null;
        $stock = $_POST['stock'] ?? null;
        $category_id = $_POST['category_id'] ?? null;
        
        
        $errors = $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|min:5',
            'image_url' => 'required',
            'duration' => 'required|numeric',
            'power_level' => 'required',
            'stock' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        
        if (!empty($errors)) {
            $product = $this->model('product');
            $categories = $product->getCategories();
            $this->render('admin.products.create', ['errors' => $errors , 'values' => $_POST , 'categories' => $categories]);
        }
        
        $product = $this->model('product');
        $product->create([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image_url' => $image_url,
            'duration' => $duration,
            'power_level' => $power_level,
            'stock' => $stock,
            'category_id' => $category_id,
        ]);
        
        $this->redirect('/admin/products');
    }


    public function editProduct($id)
    {
        $item = $this->model('product');
        $product = $item->find($id);
        $categories = $item->getCategories();
        $this->render('admin.products.edit', ['id' => $id , 'product' => $product , 'categories' => $categories]);
    }
    
    
    public function update($id)
    {
        $name = $_POST['name'] ?? null;
        $price = $_POST['price'] ?? null;
        $description = $_POST['description'] ?? null;
        $image_url = $_POST['image_url'] ?? null;
        $duration = $_POST['duration'] ?? null;
        $power_level = $_POST['power_level'] ?? null;
        $stock = $_POST['stock'] ?? null;
        $category_id = $_POST['category_id'] ?? null;
        
        
        $errors = $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|min:5',
            'image_url' => 'required',
            'duration' => 'required|numeric',
            'power_level' => 'required',
            'stock' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        
        if (!empty($errors)) {
            $product = $this->model('product');
            $categories = $product->getCategories();
            $this->render('admin.products.edit', ['errors' => $errors , 'product' => $_POST , 'categories' => $categories , 'id' => $id]);
        }
        
        $product = $this->model('product');
        $product->update($id,[
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image_url' => $image_url,
            'duration' => $duration,
            'power_level' => $power_level,
            'stock' => $stock,
            'category_id' => $category_id,
        ]);
        $this->redirect('/admin/products');
    }

    
    
    public function delete($id)
    {
        $product = $this->model('product');
        $product->softDelete($id);
        $this->redirect('/admin/products');
    }

    public function index()
    {   
        $product = $this->model('product');
        $products = $product->allData();
        $this->render('admin.products.index' , ['products' => $products]);
    }

}
