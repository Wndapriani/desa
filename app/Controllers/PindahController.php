<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendudukModel;
use App\Models\PindahModel;

class PindahController extends BaseController
{
    protected $pindahModel;

    public function __construct()
    {
        $this->pindahModel = new PindahModel();
    }

    public function index()
    {
        $data['pindah'] = $this->pindahModel->getAll();
        return view('main/pindah/index', $data);
    }

    public function create()
    {
        $penduduk = new PendudukModel();
        $data['penduduk'] = $penduduk->findAll();
        return view('main/pindah/create', $data);
    }

    public function store()
    {
        $data = [
            'id_pdd' => $this->request->getPost('id_pdd'),
            'tgl_pindah' => $this->request->getPost('tgl_pindah'),
            'alasan' => $this->request->getPost('alasan')
        ];

        $this->pindahModel->insert($data);

        return redirect()->to('/pindah')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penduduk = new PendudukModel();
        $data['penduduk'] = $penduduk->findAll();
        $data['pindah'] = $this->pindahModel->getIdJoin($id);

        return view('main/pindah/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'tgl_pindah' => $this->request->getPost('tgl_pindah'),
            'alasan' => $this->request->getPost('alasan')
        ];

        $this->pindahModel->update($id, $data);

        return redirect()->to('/pindah')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->pindahModel->delete($id);

        return redirect()->to('/pindah')->with('success', 'Data berhasil dihapus.');
    }
}
