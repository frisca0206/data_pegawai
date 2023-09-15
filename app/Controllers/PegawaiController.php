<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;


class PegawaiController extends BaseController
{
    protected $PegawaiModel;

    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pegawai Management',
            'page_title' => 'Pegawai list',
            'all_data_pegawai' => $this->PegawaiModel->findAll()
        ];
        return view('pegawai/index', $data);
    }
    
    public function create()
    {
        $data = [
            'title' => 'Pegawai Management',
            'page_title' => 'Create Data Pegawai'
        ];

        return view('pegawai/create', $data);
    }

    public function store()
    {
        $nama_pegawai = $this->request->getPost('nama_pegawai');
        $nomor_pegawai = $this->request->getPost('nomor_pegawai');
        $tanggal_bergabung = $this->request->getPost('tanggal_bergabung');

        $new_pegawai = [
            'nama_pegawai' => $nama_pegawai,
            'nomor_pegawai' => $nomor_pegawai,
            'tanggal_bergabung' => $tanggal_bergabung,
        ];

        $insert_pegawai = $this->PegawaiModel->insert($new_pegawai);
        return redirect()->to('pegawai');
    }

    public function edit($pegawai_id)
    {
        $data = [
            'title' => 'Pegawai Management',
            'page_title' => 'Edit Data Pegawai',
            'pegawai' => $this->PegawaiModel->find($pegawai_id)
        ];
        return view('pegawai/edit', $data);
    }

    public function update()
    {
        $pegawai_id = $this->request->getPost('pegawai_id');
        $nama_pegawai = $this->request->getPost('nama_pegawai');
        $nomor_pegawai = $this->request->getPost('nomor_pegawai');
        $tanggal_bergabung = $this->request->getPost('tanggal_bergabung');

        $edit_pegawai = [
            'nama_pegawai' => $nama_pegawai,
            'nomor_pegawai' => $nomor_pegawai,
            'tanggal_bergabung' => $tanggal_bergabung,
        ];

        $update_pegawai = $this->PegawaiModel->update($pegawai_id, $edit_pegawai);
        return redirect()->to('pegawai');
    }

    public function delete($pegawai_id)
    {
        $this->PegawaiModel->delete($pegawai_id);
        return redirect()->to('pegawai');
    }
}