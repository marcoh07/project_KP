<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $data=$categoryModel->findAll();
        echo view('sidebar');
        echo view('master/kategori',array('data' => $data));
    }

    public function insertCategory()
    {
        helper(['form']);
        $data = [];
        echo view('master/insertCategory', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'name'             => 'required|min_length[2]|max_length[50]'
        ];
        if($this->validate($rules)){
            $categoryModel = new CategoryModel();
            $query=$categoryModel->countRow();
            if ($query<10)
                $id_category="C000".$query;
            else if (($query>=10) && ($query<100))
                $id_category="C00".$query;
            else if (($query>=100) && ($query<1000))
                $id_category="C0".$query;
            else if ($query>=1000)
                $id_category="C".$query;
            $data = [
                'id_category'           =>$id_category,
                'name_category'         => $this->request->getVar('name'),
                'description_category'  => $this->request->getVar('desc')
            ];
            $categoryModel->insert($data);
            return redirect()->to('/kategori');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }

}