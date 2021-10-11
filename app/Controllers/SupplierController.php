<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class SupplierController extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('sidebar');
        echo view('master/supplier', array('data' => $data));
    }

    public function insertSupplier()
    {
        helper(['form']);
        $data = [];
        echo view('master/insertSupplier', $data);
    }

    //public function insertProduct()
    //{
    //    helper(['form']);
    //    $categoryModel=new CategoryModel();
    //    $data = $categoryModel->findAll();
    //    return view('insertProduct', array('data' => $data));
    //}

    //public function store()
    //{
    //    helper(['form']);
    //    $rules = [
    //        'name'             => 'required|min_length[2]|max_length[50]'
    //    ];
    //    if($this->validate($rules)){
    //        $productModel = new ProductModel();
    //        $query=$productModel->countRow()+1;
    //        if ($query<10)
    //            $id_product="P000".$query;
    //        else if (($query>=10) && ($query<100))
    //            $id_product="P00".$query;
    //        else if (($query>=100) && ($query<1000))
    //            $id_product="P0".$query;
    //        else if ($query>=1000)
    //            $id_product="P".$query;	
    //        $data = [
    //            'id_product'       =>$id_product,
    //            'name_product'     => $this->request->getVar('name'),
    //            'quantity_product' => $this->request->getVar('quantity'),
    //            'type_product'     => $this->request->getVar('type'),
    //            'price_product'    => $this->request->getVar('price')
    //        ];
    //        $productModel->insert($data);
    //        return redirect()->to('/produk');
    //    }else{
    //        $data['validation'] = $this->validator;
    //        echo view('insertProduct', $data);
    //    }
    //}

}