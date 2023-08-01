<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $primarykey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nama_pegawai' , 'nomor_pegawai' , 'tanggal_bergabung'];
}