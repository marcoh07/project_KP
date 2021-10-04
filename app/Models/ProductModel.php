<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class ProductModel extends Model{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $allowedFields = [
        'id_product',
        'name_product',
        'quantity_product',
        'type_product',
        'price_product'	
    ];

    public function countRow(){
        $query = $this->db->query('SELECT * FROM products');
        return $query->getNumRows();
    }
}