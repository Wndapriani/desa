<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MeninggalModel;
use App\Models\PendudukModel;

class MeninggalController extends BaseController
{
    protected $meninggalModel;

    public function __construct()
    {
        $this->meninggalModel = new MeninggalModel();
    }

    public function index()
    {
        $data['meninggal'] = $this->meninggalModel->getAll();
        return view('main/meninggal/index', $data);
    }

    public function create()
    {
        $penduduk = new PendudukModel();
        $data['penduduk'] = $penduduk->findAll();

        return view('main/meninggal/create', $data);
    }

    public function store()
    {
        $data = [
            'id_pdd' => $this->request->getPost('id_pdd'),
            'tgl_mendu' => $this->request->getPost('tgl_mendu'),
            'sebab' => $this->request->getPost('sebab')
        ];

        $this->meninggalModel->insert($data);

        return redirect()->to('/meninggal')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['meninggal'] = $this->meninggalModel->getIdJoin($id);

        return view('main/meninggal/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'tgl_mendu' => $this->request->getPost('tgl_mendu'),
            'sebab' => $this->request->getPost('sebab')
        ];

        $this->meninggalModel->update($id, $data);

        return redirect()->to('/meninggal')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->meninggalModel->delete($id);

        return redirect()->to('/meninggal')->with('success', 'Data berhasil dihapus.');
    }
}
