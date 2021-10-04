<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class KaryawanController extends Controller
{
    public function index()
    {
        $data['title'] = ucfirst('home');
        echo view('sidebar', $data);
        echo view('karyawan', $data);
    }

    public function formKaryawan()
    {
        $data['title'] = ucfirst('home');
        echo view('sidebar', $data);
        echo view('signup', $data);
    }

}