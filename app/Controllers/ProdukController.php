<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProdukController extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('master/Produk/produk', array('data' => $data));
    }

    public function search()
    {
        $userModel = new ProductModel();
        $search=$this->request->getVar('search');
        $data=$userModel->where('name_product', $search)->findAll();;
        echo view('header');
        echo view('sidebar');
        echo view('master/Produk/produk',array('data' => $data));
    }

    public function lihatProduk()
    {
        helper(['form']);
        $produkModel = new ProductModel();
        $id_produk=$this->request->getVar('id');
        $data = $produkModel->find($id_produk);
        echo view('header');
        echo view('sidebar');
        echo view('master/Produk/lihatProduk', $data);
    }

    public function insertProduk()
    {
        helper(['form']);
        $categoryModel=new CategoryModel();
        $data = $categoryModel->findAll();
        echo view('header');
        echo view('sidebar');
        return view('master/Produk/insertProduk', array('data' => $data));
    }

    public function insert()
    {
        helper(['form']);
        $rules = [
            'name'             => 'required|min_length[2]|max_length[50]'
        ];
        if($this->validate($rules)){
            $productModel = new ProductModel();
            $query=$productModel->countRow()+1;
            if ($query<10)
                $id_product="P000".$query;
            else if (($query>=10) && ($query<100))
                $id_product="P00".$query;
            else if (($query>=100) && ($query<1000))
                $id_product="P0".$query;
            else if ($query>=1000)
                $id_product="P".$query;	
            $data = [
                'id_product'       =>$id_product,
                'name_product'     => $this->request->getVar('name'),
                'quantity_product' => $this->request->getVar('quantity'),
                'type_product'     => $this->request->getVar('type'),
                'price_product'    => $this->request->getVar('price')
            ];
            $productModel->insert($data);
            return redirect()->to('/produk');
        }else{
            $data['validation'] = $this->validator;
            echo view('insertProduk', $data);
        }
    }

    public function updateProduk()
    {
        helper(['form']);
        $categoryModel=new CategoryModel();
        $ProdukModel = new ProductModel();
        $id_Produk=$this->request->getVar('id');
        $data = $ProdukModel->find($id_Produk);
        $data['category'] = $categoryModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('master/Produk/updateProduk', $data);
    }

    public function update()
    {
        helper(['form']);
        $rules = [
            'name'             => 'required|min_length[2]|max_length[50]'
        ];
          
        $ProdukModel = new ProductModel();
        $id_Produk=$this->request->getVar('id');
        if($this->validate($rules)){
            $data = [
                'name_product'     => $this->request->getVar('name'),
                'quantity_product' => $this->request->getVar('quantity'),
                'type_product'     => $this->request->getVar('type'),
                'price_product'    => $this->request->getVar('price')
            ];

            $ProdukModel->update($id_Produk,$data);

            return redirect()->to('produk');
        }else{
            $data = $ProdukModel->find($id_Produk);
            $data['validation'] = $this->validator;
            echo view('header');
            echo view('sidebar');
            echo view('master/Produk/updateProduk', $data);
        }
    }

    public function deleteProduk()
    {
        $ProdukModel = new ProductModel();
        $id_Produk=$this->request->getVar('id');
        $ProdukModel->delete($id_Produk);
        $data=$ProdukModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('master/Produk/produk',array('data' => $data));
    }

}