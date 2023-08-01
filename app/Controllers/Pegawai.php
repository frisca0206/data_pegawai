<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function index(){
        $pegawai_model = new PegawaiModel();
        $all_data_pegawai = $pegawai_model->findAll();
        return view('pegawai' , ['all_data_pegawai' => $all_data_pegawai]);  
    }

    public function add_data_pegawai(){
        return view('add_data_pegawai');
    }

    public function proses_add_pegawai(){
        $pegawai_model = new PegawaiModel();
        $pegawai_model->insert($this->request->getPost());
        return redirect()->to(base_url('pegawai'));
    }

    public function edit_data_pegawai($id = false){
        $pegawai_model = new PegawaiModel();
        $data_pegawai = $pegawai_model->find($id);
        return view('edit_data_pegawai' , ['data_pegawai' => $data_pegawai]);
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