<?php

namespace App\Models;

use CodeIgniter\Model;

class PindahModel extends Model
{
    protected $table = 'tb_pindah';
    protected $primaryKey = 'id_pindah';
    protected $allowedFields = ['id_pdd', 'tgl_pindah', 'alasan'];

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
        $query = $this->db->table('tb_pindah')
            ->join('tb_pdd', 'tb_pindah.id_pdd = tb_pdd.id_pend', 'left')
            ->get();
        return $query->getResultArray();
    }

    public function getIdJoin($id)
    {
        return $this->table('tb_pindah')
            ->join('tb_pdd', 'tb_pindah.id_pdd = tb_pdd.id_pend', 'left')
            ->where('id_pindah', $id)
            ->first();
    }

    public function getIdJoinPdf($id)
    {
        return $this->table('tb_pindah')
            ->join('tb_pdd', 'tb_pindah.id_pdd = tb_pdd.id_pend', 'left')
            ->where('id_pindah', $id)
            ->first();
    }
}
