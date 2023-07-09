<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{

    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }


    public function index()
    {
        $all = $this->db->findAll();
        $data = [
            'mahasiswa' => $all
        ];
        return view('fajar_32601900009', $data);
    }
}
