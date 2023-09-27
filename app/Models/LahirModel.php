<?php

namespace App\Models;

use CodeIgniter\Model;

class LahirModel extends Model
{
    protected $table = 'tb_lahir';
    protected $primaryKey = 'id_lahir';
    protected $allowedFields = ['nama', 'tgl_lh', 'jekel', 'id_kk'];
    protected $useAutoIncrement = true;
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
        $query = $this->db->table('tb_lahir')
            ->join('tb_kk', 'tb_lahir.id_kk = tb_kk.id_kk', 'left')
            ->get();
        return $query->getResultArray();
    }
}
