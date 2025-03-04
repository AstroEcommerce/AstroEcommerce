<?php


require_once  './config/Database.php';
require_once  './models/Model.php';


class Product  extends Model
{
    private $conn;

    public function __construct()
    {
        // $this->conn = Database::getInstance()->getConnection();
        parent::__construct('products');
    }
    
    
    
    // public function all()
    // {
    //     $sql = "SELECT * FROM products";
    //     $stmt = $this->conn->query($sql);

    //     return $stmt->fetchAll();
    // }
    
    
    public function ten()
    {
        return $this->query("SELECT * FROM products LIMIT 10");
    }
    
    public function lastTen()
    {
        return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
    }
    
    
    public function item($id)
    {
        
        $sql = "SELECT products.* , categories.name as category FROM products 
                INNER JOIN categories ON products.category_id = categories.id
                WHERE products.id = ?";
        $params = [$id];
        $product = $this->query($sql, $params);
        return $product;
    }
    
        

    
}
