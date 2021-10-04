<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class CategoryModel extends Model{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $allowedFields = [
        'id_category',
        'name_category',
        'description_category'	
    ];

    public function countRow(){
        $query = $this->db->query('SELECT * FROM category');
        return $query->getNumRows();
    }
}