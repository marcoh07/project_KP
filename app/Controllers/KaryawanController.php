<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class KaryawanController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $data=$userModel->findAll();
        echo view('sidebar');
        echo view('karyawan',array('data' => $data));
    }

    public function formKaryawan()
    {
        $data['title'] = ucfirst('home');
        echo view('sidebar', $data);
        echo view('signup', $data);
    }

}