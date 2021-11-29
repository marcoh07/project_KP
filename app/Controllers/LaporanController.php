<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class LaporanController extends Controller
{
    public function mutasi()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('laporan/mutasi', array('data' => $data));
    }

    public function pembelian()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('laporan/pembelianSupplier', array('data' => $data));
    }

    public function penjualan()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('laporan/penjualanCustomer', array('data' => $data));
    }

    public function pembelianTerbanyak()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('laporan/pembelianTerbanyak', array('data' => $data));
    }

    public function penjualanTerbanyak()
    {
        $productModel = new ProductModel();
        $data=$productModel->findAll();
        echo view('header');
        echo view('sidebar');
        echo view('laporan/penjualanTerbanyak', array('data' => $data));
    }

}