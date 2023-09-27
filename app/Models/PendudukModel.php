<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'tb_pdd';
    protected $primaryKey = 'id_pend';
    protected $allowedFields = ['nik', 'nama', 'tempat_lh', 'tgl_lh', 'jekel', 'desa', 'rt', 'rw', 'agama', 'kawin', 'pekerjaan', 'status'];
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

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
        $query = $this->db->table('tb_pdd')
            ->join('tb_anggota', 'tb_pdd.id_pend = tb_anggota.id_pend', 'left')
            ->join('tb_kk', 'tb_anggota.id_kk = tb_kk.id_kk', 'left')
            ->get();
        return $query->getResultArray();
    }
}
