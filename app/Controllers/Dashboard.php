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
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('dashboard', $data);
        echo view('partial/footer');
    }
}