<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KartuKeluargaModel;
use App\Models\LahirModel;

class LahirController extends BaseController
{
    protected $tbLahirModel;

    public function __construct()
    {
        $this->tbLahirModel = new LahirModel();
    }

    public function index()
    {
        $data['lahir'] = $this->tbLahirModel->getAll();

        return view('main/lahir/index', $data);
    }

    public function create()
    {
        $kk = new KartuKeluargaModel();
        $data['kk'] = $kk->findAll();

        return view('main/lahir/create', $data);
    }

    public function store()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tgl_lh' => $this->request->getPost('tgl_lh'),
            'jekel' => $this->request->getPost('jekel'),
            'id_kk' => $this->request->getPost('id_kk')
        ];

        $this->tbLahirModel->insert($data);

        return redirect()->to('/lahir')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kk = new KartuKeluargaModel();

        $data['lahir'] = $this->tbLahirModel->find($id);
        $data['kk'] = $kk->findAll();

        return view('main/lahir/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tgl_lh' => $this->request->getPost('tgl_lh'),
            'jekel' => $this->request->getPost('jekel'),
            'id_kk' => $this->request->getPost('id_kk')
        ];

        $this->tbLahirModel->update($id, $data);
        return redirect()->to('/lahir')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->tbLahirModel->delete($id);

        return redirect()->to('/lahir')->with('success', 'Data berhasil dihapus.');
    }
}
