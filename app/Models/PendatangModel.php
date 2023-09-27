<?php

namespace App\Models;

use CodeIgniter\Model;

class PendatangModel extends Model
{
    protected $table = 'tb_datang';
    protected $primaryKey = 'id_datang';
    protected $allowedFields = ['nik', 'nama_datang', 'jekel', 'tgl_datang', 'pelapor'];


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAll()
    {
        $query = $this->db->table('tb_datang')
            ->join('tb_pdd', 'tb_datang.pelapor = tb_pdd.id_pend', 'left')
            ->get();
        return $query->getResultArray();
    }
}
