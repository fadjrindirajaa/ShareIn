<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangAdaModel extends Model
{
    protected $table = 'tb_barangada';
    protected $allowedFields = ['nama', 'nama_barang', 'kota_asal', 'no_hp', 'foto'];

    public function getBarangAda($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
