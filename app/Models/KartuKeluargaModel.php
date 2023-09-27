<?php

namespace App\Models;

use CodeIgniter\Model;

class KartuKeluargaModel extends Model
{
    protected $table = 'tb_kk';
    protected $primaryKey = 'id_kk';
    protected $allowedFields = ['no_kk', 'kepala', 'desa', 'rt', 'rw', 'kec', 'kab', 'prov'];
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

    public function penduduk($id)
    {
        $query = $this->db->table('tb_anggota')
            ->join('tb_pdd as pdd', 'tb_anggota.id_pend = pdd.id_pend', 'left')
            ->where('tb_anggota.id_kk', $id)

            ->get();
        return $query->getResultArray();
    }
}
