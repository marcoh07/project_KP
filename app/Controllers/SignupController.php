<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'username'         => 'required|min_length[2]|max_length[50]',
            'name'             => 'required|min_length[2]|max_length[50]',
            'email'            => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email_user]',
            'password'         => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]',
            'phone_number'     => 'required',
            'address'          => 'required',
            'type'             => 'required',
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $query=$userModel->countRow()+1;
            if ($query<10)
                $id_user="U000".$query;
            else if (($query>=10) && ($query<100))
                $id_user="U00".$query;
            else if (($query>=100) && ($query<1000))
                $id_user="U0".$query;
            else if ($query>=1000)
                $id_user="U".$query;    
            $data = [
                'id_user'           =>$id_user,
                'username_user'     => $this->request->getVar('username'),
                'name_user'         => $this->request->getVar('name'),
                'email_user'        => $this->request->getVar('email'),
                'password_user'     => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'phone_number_user' => $this->request->getVar('phone_number'),
                'address_user'      => $this->request->getVar('address'),
                'type_user'         => $this->request->getVar('type')
            ];

            $userModel->insert($data);

            return redirect()->to('/karyawan');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
          
    }
  
}