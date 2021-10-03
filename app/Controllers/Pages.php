<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        $data['title'] = ucfirst('home');
        echo view('sidebar', $data);
        echo view('home', $data);
    }
}