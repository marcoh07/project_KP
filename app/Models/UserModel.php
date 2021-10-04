<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'id_user',
        'username_user',
        'name_user',
        'email_user',
        'password_user',
        'phone_number_user',
        'address_user',
        'type_user'	
    ];

    public function countRow(){
        $query = $this->db->query('SELECT * FROM users');
        return $query->getNumRows();
    }

}