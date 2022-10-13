<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangButuhModel extends Model
{
    protected $table = 'tb_barangbutuh';
    protected $allowedFields = ['nama', 'nama_barang', 'kota_asal', 'no_hp', 'foto'];

    public function getBarangButuh($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
