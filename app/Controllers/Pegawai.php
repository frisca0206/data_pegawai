<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index(){
        $pegawai_model = new PegawaiModel();
        $all_data_pegawai = $pegawai_model->findAll();
        $data = [
            'all_data_pegawai' => $all_data_pegawai
        ];
        $header['title']='Dashboard';
        echo view('layouts/header',$header);
        echo view('layouts/top_menu');
        echo view('layouts/side_menu');
        echo view('pegawai/index', $data);
        echo view('layouts/footer');
    }

    public function add_data_pegawai(){
        $header['title']='Dashboard';
        echo view('layouts/header',$header);
        echo view('layouts/top_menu');
        echo view('layouts/side_menu');
        echo view('add_data_pegawai');
        echo view('layouts/footer');
        // return view('add_data_pegawai');
    }

    public function proses_add_pegawai(){
        $pegawai_model = new PegawaiModel();
        $pegawai_model->insert($this->request->getPost());
        return redirect()->to(base_url('index'));
    }

    public function edit_data_pegawai($id = false){
        $pegawai_model = new PegawaiModel();
        $data_pegawai = $pegawai_model->find($id);
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        $header['title']='Dashboard';
        echo view('layouts/header', $header);
        echo view('layouts/top_menu');
        echo view('layouts/side_menu');
        echo view('edit_data_pegawai', $data);
        echo view('layouts/footer');
        // return view('edit_data_pegawai' , ['data_pegawai' => $data_pegawai]);
    }

    public function proses_edit_pegawai(){
        $pegawai_model = new PegawaiModel();
        $pegawai_model->update($this->request->getPost('id') , $this->request->getPost());
        return redirect()->to(base_url('pegawai'));
    }

    public function delete_data_pegawai($id = false){
        $pegawai_model = new PegawaiModel();
        $pegawai_model->delete($id);
        return redirect()->to(base_url('pegawai'));
    }
}