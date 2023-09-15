<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $pegawai_model = new PegawaiModel();
        $all_data_pegawai = $pegawai_model->findAll();

        $data = [
            'all_data_pegawai' => $all_data_pegawai
        ];

        $header['title']='Dashboard';
        echo view('layouts/header',$header);
        echo view('layouts/top_menu');
        echo view('layouts/side_menu');
        echo view('dashboard', $data);
        echo view('layouts/footer');
    }
}